<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create a Group
            </h2>
        </template>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <form @submit.prevent="submit">
            <div class="border-t border-gray-200">
                <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                        <div>
                            <InputLabel for="contactFirstName" value="Primary Contact First Name" />
                            <TextInput id="contactFirstName" type="text" class="block w-full mt-1" v-model="form.contactFirstName"/>
                        </div>
                        <div>
                            <InputLabel for="contactLastName" value="Primary Contact Last Name" />
                            <TextInput id="contactLastName" type="text" class="block w-full mt-1" v-model="form.contactLastName"/>
                        </div>
              
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Contact Phone Number</dt>
                        <TextInput id="contactPhoneNumber" type="text" class="block w-full mt-1" v-model="form.contactPhoneNumber"/>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Add Group Member</dt>
                    <div class="grid grid-cols-9 sm:gap-3">
                        <TextInput id="newMember" type="text" class="block w-full col-span-7 mt-1" v-model="newMember" placeholder="John Smith..."/>
                        <Button class="col-span-2" type='button' @click="addMember(newMember)">
                            Add Member
                        </Button>
                    </div>
                </div>

                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Other Group Members</dt>
                </div>
                
                <div id="otherMembers" class="w-full bg-white">
                    <div class="grid grid-cols-2 m-4">
                        <span v-for="member in form.details.members" :key="member" class="grid grid-cols-4 sm:gap-3 m-2">
                            <div class="col-span-3 bg-gray-200 p-2 rounded-md">
                                {{member['name']}}
                            </div>
                            <Button class="text-sm" type='button' @click="removeMember(member)">
                                Remove
                            </Button>
                        </span>
                    </div>
                </div>

                <div id="otherContact" class="w-full bg-slate-50">
                    <div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <div>
                                <InputLabel for="altContactType" value="Contact Type (Email, Cell, etc.):" class="block w-full mt-1"/>
                                <TextInput id="altContactType" type="text" class="block w-full mt-1" v-model="newContactType"/>

                            </div>
                            <div>
                                <InputLabel for="altContactInfo" value="Contact Info" class="block w-full mt-1"/>
                                <TextInput id="altContactInfo" type="text" class="block w-full mt-1" v-model="newContactInfo"/>
                            </div>

                            <Button class="col-span-2" type='button' @click="addContact(newContactType, newContactInfo)">
                                Add
                            </Button>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Other Contact Members</dt>
                </div>
                <div id="otherContacts" class="w-full bg-gray-50">
                    <div class="grid grid-cols-2 m-4">
                        <span v-for="contact in form.details.alternativeContactInfo" :key="contact"
                        class="grid grid-cols-4 sm:gap-3 m-4">
                        <div class="col-span-3 bg-gray-200 p-3 rounded-md">
                            {{contact.type+': ' + contact.info}}
                        </div>
    
                        <Button class="py-4 text-sm" type='button' @click="removeContact(contact)">
                            Remove
                        </Button>
                        </span>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Has Pets</dt>
                    <input type="checkbox" v-model="form.details.hasPets" id="details.hasPets">
                </div>
                <div class="flex justify-end m-4">
                    <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        {{props.edit ? 'Update': 'Submit'}}
                    </Button>
                </div>


                </dl>
            </div>
        </form>
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

const removeMember = (member) => {
    form.details.members.splice(
            form.details.members.indexOf(member), 1
        );
};

const addContact = (contactType, info) => {
    if(info){
        form.details.alternativeContactInfo.push({'type':contactType, 'info':info});
        newContactType.value='';
        newContactInfo.value='';
    }
};
const removeContact = (obj) => {
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

