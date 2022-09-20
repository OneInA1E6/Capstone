### COSC499 Client Meeting 1

*Gabriel is the Client Liason for Group A, alongside the other liasons Mashad (Group B, wasn't there for much) and Akshaj (Group C)*

Almost everybody showed up to the meeting of the 12 of us.

# 1:00
-waiting for people to trickle in
-Land Acknowledgement
	-The Glohaven team all live work and play in the Okanagan,
	-Focusing on that community aspect is core of Glohaven
-Before everything, be sure to take risks, we're excited for people to tribute, and look forward to the learning we all get to do

# 1:05
-Introductions from the Liasons
	-Gabriel - Looking forward to working with them and their team on this project
	-Johnathan - Introduced for B, not much to say
	-Akshaj - Very excited for this project, sounds like interesting stuff
	       
# 1:08
-Introduction Glohaven
	-Michael B.
		-Project is being watched by a lot of people
		-Want to bring our best
		-Should be an opportunity for everyone to contribute
		-Take risks! Don't be afraid to try some wild ideas
		-Lots of time and opportunities
		-Look forward to getting to know us all
	-George
		-Graduated from OC with Bachelor of Information Systems
		-understands capstone work, did it when he was in school
		-hails from Kelowna
		-main go to guy for the Capstone stuff
	-Adrien
		-hails from Vernon
		-Can't relate to Schooling, self taught
		-Been with Glohaven for 2 years
		-wont be meeting as much as George, but still involved and available for questions

# 1:12
-The Glohaven Story
	-Aiming to build a building a digital destination management ecosystem to support local community and tourism sectors
	-Want to empower tourism with the tools and data to function better in this digital world

	-Michael's Story
     		-Comes from a long line of entrepreneurs
		-Instilled importance of community and time
		-Fell in love with tourism at a young age at Lake Louise in Banff
			-Wanted to live there some day, so he did
		-Worked at resort near Lake Louise
		-Led to tourism and media sales
		-Moved to Okanagan in 2007
			-Founded a digital media company focused on videows
			-won multiple awards and helped to support and expand local tourism
		-Worked as a firefighter
			-Gave a foundation for leading teams
			-Helped him learn how to manage projects under pressure
		-Has had many hardships, both in firefighting and with health issues
		-2014 said that if he made it through, then he'd devote his life to making meaningful and impactful change
			-does it where he knows he can, in the tourism sector

# 1:23
The GEMS goal
-Hard for community and tourism to be successful if it's not accessable
	-last few years have had numerous issues plaguing the industry
      		-covid
		-natural disasters
      	-in all of this (especially covid) many people turned to online solutions for their entertainment and exploration needs
      		-Issue: there's no community or access to local solely from online.
	    	-Issue: the big companies extract billionso f dollars from communities
	    	-Issue: the status quo is just not sustainable for communities or business
	    		-example: when planning trips in BC, tourists attend an average of 38 websites
	    	-Solution, a platform and toolset built by the tourism industry, for the tourism industry.
	    		-issue there's a huge gap in the technology when it comes to this regard, which just leads to
		       		-Revenue loss
				-Unemployment
				-Consumer frustration
				-Disruption of life, with no way to accomodate
			-That's where GEMS, and us in the capstone project, comes in


# 1:30
Where GEMS comes in
-When there's emergencies or big events going on, there's usually software involved to try to coordinate everything
-Issue is that it's not exactly suited to handle such big events
	-take 2017, 2018 and 2021 fire seasons, absolutely awful
       		-there's no technology, so people just end up calling hotels, motels accomodation
		-Fine to a point, but with thousands of evacuees and Emergency Service people,  eventually becomes too much to handle
		-Mike saw this as an opportunity to do better

-The whole tourism industry are looking to create and utilize tools to manage tourism, everything from marketing to destination mangement
-some sectors use things like Shopify and Hubspot, but they're not really tailored to the tourism sector
	-only sows frustration

-This all led to conversations to provide digital infrastructure
	-instead of everything being fragmented, community based marketplaces is the plan
	-idea is to divert consumer traffic away from the giants, to this centralized place
      	-gives each community the tools for buisiness and communications

# 1:35
GEMS
-Idea is to be kind of like a plugin to their main community based hub and project
-Idea has potential to go beyond emergency management, to big events like the BC Winter Games and other things that need accomodation
-Give the coordinators and people who need it the data and dashboards to set this kind of stuff up

-Have some very intererested parties in this regard
	-BC Hotel Association
	-Thompson-Okanagan Tourism
		-side note, leaders in sustainable tourism. Very cool
	-Indigenous Tourism
      	-And the team of all sorts of industry leaders at Glohaven
      	-All want to continue the conversation
      	-Want this to be better, not just for the organizaitons but for all the customors
-All this to say the requirements will likely evolve as we go forward
-Project built on the values of collaboration and sustainability
-All with the creative and inovative minds all around, as it's the minds of the community that give this project the best shot at success

# 1:40
Wrap up to the Story
-During treatment for health, everything tasted like cardboard,
-One day in August, is handed a peach by in laws
-the peach was like a difribliator to his tastebuds
	-the type of peach was a Glohaven, grown locally in the Okanagan.

-Year later when Michael was trying to name the project
	-Wasn't sure what to call it
      	-Went to the orchard where the peach was from, and his wife suggests: Why not call it Glohaven
-That's the seed that planted the idea to call it Glohaven
-Appreciates that we've taken the time to hear about the hopes and dreams for the future.

# 1:45
The requirement for the project
-Over to Adrian and George
-Made a requirements document: https://docs.google.com/document/d/1QihJwHGf21KwdMD0RD1Cv3IDLi0mGxSd2uo_oKJF6tQ/edit?usp=sharing
-Main idea is to hold to that

-THE TECH STACK
  	-Only hard requirement is Laravel, a PHP framework that works very well with MySQL and MariaDB
     	-Would also like it if we handle authentication with Laravel Breeze
     	-Lots of freedom for the rest, though they will recommend that we use VueJS and Inertia (integrates very well with Laravel and Vue)
     		-Livewire is also an option for that middleman
     	-Laravel docs are very helpful and friendly to work with
     	-Laravel is built to integrate well with Vue, no weird things to make it work, it's a pre packaged platform.

-IDEA BEHIND THE APP
	-a basic Create, Update, Read, Delete (CRUD) application
	-3 main entities: Accomodations, groups, and regions
      		-REGIONS: things like the Thompson-Okanagan, Kootneys, Greater Vancouver Area. Essentially a container for groups
	 		-Only really need to worry about national for now, so only Canadian Provinces
		   	-Regions will have acommodations
	 	-ACCOMODATIONS: the places where people will be able to stay if they are evacuated or volunteering somewhere. Will be things like hotels, motels, makeshift acommodations, etc 
			-Makeshift Accommodations are like Gymnasiums with mattresses on the ground.
			-Emphasis is on hotels though, as they have agreements with local municipality to help out in those kinds of scenarios.
	 	-GROUPS: The thing that ties it all together, groups of 1 or more people that are in need of a place to stay for an event or emergency
	 		-When people are evacuated, this is how they're handled
			-When people volunteer and dont stay in camps built, then they also need volunteers
			-Also can one day extend to athletes or other groups for big events

-Some key features:
	-Search system of some kind
      		-since there's no tech for this, we've seen people organizing with nothing more than an excel spreadsheet
	      		-Doesn't scale very big, nor very good
	     	-to have a system where you can simply search up for accomodations, groups or regions, like a fuzzy search, would be very good to have. Powerful tool.
	     	-Don't need to make Google, just something that works
	    	-Possibilities: fuzzy search, tag filtering
	-The big crux is the booking and reservation system. This is the "bread and butter" of the app.
      		-This is the main functionality, for groups to be able to book at accomodations
		-one day will hopefully integrate with some cloud based inventory with the SABRE API, invented by the airline industry

-HOSTING THE STACK
	-Laravel works nicely with everything, but if using windows, either use a Virtual Machine, or Windows subsystem for Linux.
	-Mail hosting recomends Mailtrap.io
-Final note: feel free to play around, the only hard requirement is Laravel.

# 1:55
Question Period:
	Most of the agreed upon questions from the Liasons were answered in the information period, but a few weren't. Plus after hearing the scenario, a few people 			also chimed in with questions
	-Question (Gabriel): "Client-side wise, what kinds of devices will we have to deal with. Is this going to be an app or solely a webapp?"
		-Answer: We only have to worry about the web app side of it.
			-As a bonus, if people are able to create or figure out the routing for and API that could be used by some future app that would be really 			    cool, but for now, just working on the web app side of it

	-Question: "Question about the search system, are we able to use things like tags to help with filtering"
		-Answer: That's a great idea, and in general if you have any ideas feel free to try them out. All we're looking for is a rudimentary list, like the 			fuzzy finder system in Mac or like Ctrl+P in VSCode, but if you want to try this other ideas, a filtering either search results, or search results 			by options, then that's awesome.

	-Question: "Is the site more focused on pre-emergency planning, like pre-fire season, or is it more supposed to be a fluid quick and easy system for 				accomodation creation and booking."
		-Answer: Aspects of both would be awesome. Municipalities have information that can be gotten from entities like hotels, and so to be able to enter 			      that in beforehand would be useful, but it also needs to take into account makeshift accomodations like gym floors and booking for evacuees.

	-Question: "Is there supposed to be logins for Emergency Personel and Evacuees"
		-Answer: "For now just deal with a single admin sign in, that would be used to create acommodations and connect bookings to groups.
			-For a bonus round, there's the potential for public facing reservations and creating a temporary account but at this point just an 				  administrator login is fine.
			-That's a great idea for the future when it's not just emergency systems though

	-Question:"Do we worry about payments?"
		-Answer: No, just worry about making a CRUD application.
		-The tourism sector itself is pretty foreign to the idea of subscriptions, so we don't need to worry about that

	-Question (Gabriel): "What would be the preferred way of contacting you if we have any questions or issues that come up?"
		-Answer:Being remote, Glohaven is accustomed to the online workspace, 
		-There's a Discord that they have made that can be made that we can post questions. That's probably going to be much easier to get in contact with 		    that way than via email, since they're on discord all day, but only check emails once per day. Plus, they've made a channel dedicated to capstone 			 students.
		-The discord in question: https://discord.gg/hCkerEqjJp
	-Question (Gabriel): "With that, what times would likely work the best for future meetings."
		-Answer: It's more on the student's schedule, as we've got classes to accomodate for, so it's whoever needs to join whenever we can make it work.

# 2:10
	Farewells
	-We all seem very excited for the opportunity, sounds like an awesome project.
	-The Glohaven team also look forward to supporting and learning along side us all the way. 

# 2:10
	Meeting Ajourned
