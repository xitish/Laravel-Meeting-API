# Laravel-Meeting-API
A API built using Laravel Framework to organize meetings.
<hr>
This API lets users do the following things:
    
    
>Create Meeting    

__Endpoint__ : <a href="#">/api/v1/meeting</a> __[POST]__   
__Prarameters__ :     
- time
- title
- description
- user_id

>Update Meeting    

__Endpoint__ : <a href="#">api/v1/meeting/{id}</a> __[PATCH]__  (id = Id of the meeting to be modified. Eg : 1, 2, 3, 4 ..)   
__Prarameters__ :     
- time
- title
- description
- user_id
    
>Register for a Meeting    

__Endpoint__ : <a href="#">/api/v1/meeting/register</a> __[POST]__   
__Prarameters__ :     
- meeting_id
- user_id
    
>Unregister from a Meeting    

__Endpoint__ : <a href="#">api/v1/meeting/register/{id}</a> __[DELETE]__  (id = Id of the meeting to be unregistered from. Eg : 1, 2, 3, 4 ..)  
__Prarameters__ : None    
_The currently logged in User will be unregistered from the meeting_    

>View List of all Meetings    

__Endpoint__ : <a href="#">/api/v1/meeting</a> __[GET]__   
__Prarameters__ : None    

>View One Meeting    

__Endpoint__ : <a href="#">/api/v1/meeting/{id}</a> __[GET]__  (id = Id of the meeting to view details. Eg : 1, 2, 3, 4 ..)  
__Prarameters__ : None    

<hr>    
<b>Endpoints except <i>Viewing List of Meetings</i> and <i>Viewing Detils of One Meeting</i> requires users to be logged in</b>        
The following routes are used for Users registration and Sign-In:        


>Create User    

__Endpoint__ : <a href="#">/api/v1/user</a> __[POST]__   
__Prarameters__ :     
- name
- email
- password    

>Sign in a User    

__Endpoint__ : <a href="#">/api/v1/user</a> __[POST]__   
__Prarameters__ :     
- email
- password 
