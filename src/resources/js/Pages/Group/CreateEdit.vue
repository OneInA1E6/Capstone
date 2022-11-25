<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create a Group
            </h2>
        </template>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form @submit.prevent="submit">

                        <span class="grid grid-cols-2">
                        <div>
                            <InputLabel for="contactFirstName" value="Primary Contact First Name" />
                            <TextInput id="contactFirstName" type="text" class="block w-full mt-1" v-model="form.contactFirstName"/>
                            <!-- <InputError class="mt-2" :message="form.contactFirstName" /> -->
                        </div>
                        <div>
                            <InputLabel for="contactLastName" value="Primary Contact Last Name" />
                            <TextInput id="contactLastName" type="text" class="block w-full mt-1" v-model="form.contactLastName"/>
                            <!-- <InputError class="mt-2" :message="form.contactLastName" /> -->
                        </div>
                    </span>
                    <div>
                        <InputLabel for="contactPhoneNumber" value="Contact Phone Number" />
                        <TextInput id="contactPhoneNumber" type="text" class="block w-full mt-1" v-model="form.contactPhoneNumber"/>
                        <!-- <InputError class="mt-2" :message="form.contactPhoneNumber" /> -->
                    </div>

                    <InputLabel for="otherMembers" value="Other Group Members" />
                    <div id="otherMembers" class="w-full bg-slate-50">

                        <div class="grid grid-cols-2 m-4 space-x-4 space-y-2 ">
                            <span v-for="member in form.details.members" :key="member" class="grid grid-cols-4 bg-gray-200">
                                <div class="col-span-3">
                                    {{member['name']}}
                                </div>
                                <Button class="py-4 text-sm" type='button' @click="removeMember(member)">
                                    Remove
                                </Button>
                            </span>
                        </div>

                        <div>
                            <InputLabel for="newMember" value="Add Group Member" />
                            <div class="grid grid-cols-9 ">
                                <TextInput id="newMember" type="text" class="block w-full col-span-7 mt-1" v-model="newMember"/>
                                <Button class="col-span-2" type='button' @click="addMember(newMember)">
                                    Add Member
                                </Button>
                            </div>
                        </div>
                    </div>

                    <InputLabel for="otherContact" value="Other Contact Methods" />
                    <div id="otherContact" class="w-full bg-slate-50">

                        <div>
                            <InputLabel for="altContact" value="Add Group Member" />
                            <div v-for="contact in form.details.alternativeContactInfo" :key="contact"
                                class="grid w-full h-auto grid-cols-4">
                                <div class="col-span-3">
                                    {{contact.type+': ' + contact.info}}
                                </div>

                                <Button class="py-4 text-sm" type='button' @click="removeContact(contact)">
                                    Remove
                                </Button>

                            </div>

                            <div id="altContact" class="grid grid-cols-8 ">

                                <InputLabel for="altContactType" value="Contact Type (Email, Cell, etc.):" class="col-span-3"/>

                                <InputLabel for="altContactInfo" value="Contact Info" class="col-span-3"/>
                                <div class="col-span-2"/>

                                <TextInput id="altContactType" type="text" class="block w-full col-span-3 mt-1" v-model="newContactType"/>
                                <TextInput id="altContactInfo" type="text" class="block w-full col-span-3 mt-1" v-model="newContactInfo"/>
                                <Button class="col-span-2" type='button' @click="addContact(newContactType, newContactInfo)">
                                    Add
                                </Button>
                            </div>
                        </div>
                    </div>


                    <div>
                        <InputLabel for="details.hasPets" value="Has Pets" />
                        <input type="checkbox" v-model="form.details.hasPets" id="details.hasPets" >
                    </div>

                    <div class="flex justify-end mt-4">
                        <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            {{props.edit ? 'Update': 'Submit'}}
                        </Button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Button from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

const props = defineProps({
    group: {
        type: Object,
        default: {}
    },
    details: {
        type: Object,
        default: {}
    },
    edit: {
        type: Boolean,
        default:false,
    }
})
const form = useForm({
    'contactFirstName': (props.edit) ? props.group.contact_firstname :'',
    'contactLastName':  (props.edit) ? props.group.contact_lastname  :'',
    'contactPhoneNumber':      (props.edit) ? props.group.contact_phone_number :'',
    'details': {
        'members':(props.edit) ? (JSON.parse(props.details.group_members) ?? []) : [],
        'alternativeContactInfo': (props.edit) ? (JSON.parse(props.details.alternative_contact_information) ??[]) :[],
        'hasPets': (props.edit) ? props.details.has_pets===1 : false,
    }

});
const newMember = ref('');

const newContactType = ref('');
const newContactInfo = ref('');

const addMember = (memberName) => {
    if(memberName){
        form.details.members.push({'name': memberName});
        newMember.value='';
    }
};

const removeMember = (memberName) => {
    if(memberName){
        form.details.members.push({'name': memberName});
        newMember.value='';
    }
};

const addContact = (contactType, info) => {
    if(info){
        form.details.alternativeContactInfo.push({'type':contactType, 'info':info});
        newContactType.value='';
        newContactInfo.value='';
    }
};
const removeContact = (obj) => {
    console.log(form.details.alternativeContactInfo)
    console.log(
        form.details.alternativeContactInfo.indexOf(obj)
        );


        form.details.alternativeContactInfo.splice(
            form.details.alternativeContactInfo.indexOf(obj), 1
        );

};

const submit = () => {
    form.post((props.edit) ? route('groups.update', props.group) : route('groups.store'), {
        onFinish: () => form.reset(),
    })
  }
</script>

