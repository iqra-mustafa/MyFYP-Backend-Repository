<html>
    <head>
        <style>
          
        </style>
    </head>
    <body style="margin-left: 40px;margin-top:30px;margin-right:40px">

        <p>Dear Sir,</p>

        <p>
           Following Stationary request has been approved by the admin, please see details and provide them as soon as possible.
           Regards,
        </p>
        <table border="0">
            <tr>
                <th>Description</th>
                <td>{{$user->description}}</td>
            </tr>
            <tr>
                 <th>Username</th>
                <td>{{ $user->user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user->user->email }}</td>
            </tr>
            <tr>
                <th>Contact</th>
                 <td>{{ $user->user->V_ContactNumber }}</td>
            </tr>
            <tr>
                <th>School Name</th>
                 <td>{{ $user->school->name }}</td>
            </tr>
            <tr>
                <th>Location</th>
                 <td>{{ $user->school->location }}</td>
            </tr>


        </table>
</html>
