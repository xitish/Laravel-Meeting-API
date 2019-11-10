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

<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/Create%20Meeting.png"></p>
<hr>

>Update Meeting    

__Endpoint__ : <a href="#">api/v1/meeting/{id}</a> __[PATCH]__  (id = Id of the meeting to be modified. Eg : 1, 2, 3, 4 ..)   
__Prarameters__ :     
- time
- title
- description
- user_id

<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/UpdateMeeting.png"></p>
<hr>
    
>Register for a Meeting    

__Endpoint__ : <a href="#">/api/v1/meeting/register</a> __[POST]__   
__Prarameters__ :     
- meeting_id
- user_id

<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/RegisterForMeeting.png"></p>
<hr>
   
>Unregister from a Meeting    

__Endpoint__ : <a href="#">api/v1/meeting/register/{id}</a> __[DELETE]__  (id = Id of the meeting to be unregistered from. Eg : 1, 2, 3, 4 ..)  
__Prarameters__ : None    
_The currently logged in User will be unregistered from the meeting_    
<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/UnregisterFromMeeting.png"></p>
<hr>

>View List of all Meetings    

__Endpoint__ : <a href="#">/api/v1/meeting</a> __[GET]__   
__Prarameters__ : None    
<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/Meeting%20List.png"></p>
<hr>

>View One Meeting    

__Endpoint__ : <a href="#">/api/v1/meeting/{id}</a> __[GET]__  (id = Id of the meeting to view details. Eg : 1, 2, 3, 4 ..)  
__Prarameters__ : None    
<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/One%20Meeting.png"></p>
<hr>

<hr>    
<b>Endpoints except <i>Viewing List of Meetings</i> and <i>Viewing Detils of One Meeting</i> requires users to be logged in</b>    

### Users can log in using their email and password. A token is supplied after successful login which needs to be supplied in subsiquent requests.    

The following routes are used for Users registration and Sign-In:        


>Create User    

__Endpoint__ : <a href="#">/api/v1/user</a> __[POST]__   
__Prarameters__ :     
- name
- email
- password    
<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/Create%20User.png"></p>
<hr>

>Sign in a User    

__Endpoint__ : <a href="#">/api/v1/user</a> __[POST]__   
__Prarameters__ :     
- email
- password 
<p align="center"><img src="https://github.com/xitish/Laravel-Meeting-API/blob/master/illustration/Login.png"></p>

