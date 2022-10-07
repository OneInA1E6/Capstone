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

### Frontend

### Backend

### Auxiliary

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
