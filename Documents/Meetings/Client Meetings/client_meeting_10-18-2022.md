# COSC499 Client Meeting 5

Date: Monday, October 17th, 2022

Time: 4PM-4:30PM

Location: UBCO Capstone Discord Channel

*Gabriel is the Client Liason for Group A, alongside the other liasons Mashad (Group B) and Akshaj (Group C)*


### 4:00
- Gabriel, Mashad and George join Discord
- George that there's an update to project requirement
    - Will wait until Akshaj joins

### 4:05
- Akshaj join
- All the liasons say good job to eachother about the capstone requirement presentation
    - Gabriel says that the other two presentations helped to clarify and add to our requirement report
    - Akshaj and Mashad say likewise.
- On the topic of the report, Akshaj gives his group's update
    - Focused mainly on the report last week, but his group has finished all of their setup, and so they can finally get started on the project

## Project Update
### 4:08
- George explains the update in the project's requirements
    - Mike had a conversation with some emergency services people
    - Got some clarification about how many people will be using the site at one time
        - The user group is the same, it's still registration agents
        - But there will be multiple registration agents on the site making registrations
    - Will need to consider a couple of things:
        - Race conditions, if two registration agents try to sign different groups up with the same accomodation
        - Once a booking has been selected, then it should be closed off to not allow other RAs from selecting it, at least until it's free.
        - Multiple logins for different users, so it's not just one superuser
    - Don't need to make an account creation page, just need to seed users to the database
- Rest of the project is exactly the same, can't book two groups for the same accomodation, until the booking has freed up
- George has updated the requirement Google Doc accordingly
  
## Question Period
### 4:12

- Question (Akshaj): So it's still the registration agents doing the work, not emergency services?
    - Answer: Yes, just now there are multiple registration agents.
- No other questions this week. Will certainly be some coming up once we actually start programming.

## Progress Report
- Akshaj already gave his report
- Gabriel says that like Akshaj's group, we were mainly focusing on report presentation
    - All done with the boilerplate though
    - Will be starting with the programming this week
    - Will be figuring out who's doing what at our sprint meeting on Tuesday, and from then on there will be more to say in progress report
- Mashad says they were also focusing on the report presentation
    - Will be trying to set up MariaDB this week, then hopefully will be started with the actual project

## Closing
- Any other business?
- Not for this week, will likely be more next week though.
- Awesome, have a great week, good luck on any midterms
  
Meeting Ajourned