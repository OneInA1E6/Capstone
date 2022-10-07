# Glohaven’s Emergency Management Solutions Requirements Report

Group A


#### Andrew D, Gabriel M., Michael V., Tanner W.

## Description of the GEMS Software

## Primary User Group of GEMS

The primary user of GEMS is the 

## Diagrams of the System Architecture

## List of Requirements

### Milestone 1

#### Functional

#### Non-Functional
### Milestone 2

#### Functional

#### Non-Functional

### Last one 

#### Functional

#### Non-Functional

## The Tech Stack
The Tech Stack for this project is relatively flexible. The only hard requirement was that the stack had to include the MVC framework for PHP, Laravel, and they highly recommended using Vue alongside it with Inertia.js. 

### Backend

The only hard requirement of the project is that we have to use Laravel, an MVC framework for the PHP scripting language.

For consistency with the rest of the section, here are some pros and cons to this backend.

Pros:
    - Very old, established and standardized language
    - Well documented both on Stack Overflow and at https://www.php.net
    - Laravel itself has exceptional documentation
    - Tanner and Gabriel have worked with Laravel during their Co-ops
    - Laravel provides many packages for things like
        - linting
        - authentication
        - testing
        - much more
    - Laravel handles many of the nuances with regards to databases and security middleware

Cons:
    - Odd syntax
        - $ before variables 
        - C++-like without the versitility
        - use of arrows instead of dots
    - Inconsistent type hinting for functions and arguements
    - Not as cutting edge as some other backends
    - Andrew and Michael haven’t ever even touched PHP
    - Initial setup is challenging if we're not creating a strictly PHP app (which we're not)

Though there was no choice in this respect, we're still alright with using PHP and Laravel. The versitility that this backend offers is appretiated, and the fact that Gabriel and Tanner are familliar with the framework is an asset. 

### Frontend

### Auxiliary

There are so many choices for things like containerization and databases that it's all pretty arbitrary, as Laravel handles a majority of the difficult parts.
Therefore, we're only going to go through the choices that our group decided upon, and leave it at that.

#### Containerization: Docker

Pros:
    - Laravel provides out of the box Docker setup and integration via Laravel Sail
    - Lightweight: each container only has the files and dependencies for the single app it contains
    - Helpful GUI via Docker Desktop, available on all systems
    - Whole team has used it before

Cons:
    - Post initial setup configuration can be more trouble than it's often worth
    - Modulization can be non-trivial to those familiar with Virtualization

#### Database: MySQL

Pros:
    - Whole team has used extensively before
    - Integrates seamlessly with Laravel
        - In fact, is the default database for Laravel
    - Open source implementation via MariaDB
    - Easy to set up in Docker

Cons:
    - Whole team is kind of tired of using MySQL for the *n*th time
#### IDE: Visual Studio Code

Pros:
    - Open source and highly extensible
    - Available on all systems
    - Personalizable
  
Cons:
    - Too good
#### Other Tech
- Inertia.js for frontend-backend communication
- Windows Subsystem for Linux for those not running on a UNIX system.
- Github the prime choice for a remote repository
- Tailwind makes CSS a breeze
- To be expanded as time goes on

## Test Explaination

When new code is being added, users must create a PEST test for the code being developed.
PEST testing is commonly used with the Laravel framework since both use php. 
Creating a PEST test will require 3 steps to be completed for a feature to fully be tested. 

Prepare your test first (creating models from factories, other setup)
Act – do the test, execute the code that is being tested
Assert that the 'Act' step has had the intended consequences

By fully implementing PEST testing users will be able to test their features to ensure no uncaught errors make it to the production stage.
Github also offers the ability to implement webhooks into repositories to ensure no HTTP errors are received such as HTTP Requests and Responses.
Implementing these will help limit the amount of errors that are not picked up from PEST testing as well as Manual testing. 
Manual testing will also be the final step in guaranteeing no broken code ends up in production. 
By making sure that the features you implemented work correctly by manually trying to see if they work in many different ways, 
as well as any potential areas you may have changed are correctly functional.
Using these three methods of testing will help limit errors and unwanted bugs in our project.

https://docs.github.com/en/developers/webhooks-and-events/webhooks/testing-webhooks
https://pestphp.com/docs/installation
