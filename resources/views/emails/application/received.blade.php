@component('mail::message')
# New Application Received

| **Field**           | **Detail**                             |
|---------------------|----------------------------------------|
| **Name**            | {{ $application['Name'] }}             |
| **Email**           | {{ $application['Email'] }}            |
| **Phone No**        | {{ $application['Phone_Number'] }}            |
| **Designation**     | {{ $application['Designation'] }}      |
| **Company URL**     | {{ $application['URL'] }}      |
| **Company Location**| {{ $application['Location'] }} |
| **Industry Type**   | {{ $application['Industry'] }}    |
| **Company Name**    | {{ $application['Company_Name'] }}     |
| **Industry Category**| {{ $application['Company_Type'] }}|
| **Incorporated Since**| {{ $application['Incorporated_Since'] }}|
| **Attachment**      | {{ $application['Pitch_Upload'] }}       |
| **Description**     | {{ $application['Description'] }}      |
| **Accept T&C**      | {{ $application['Accept_T&C'] }}       |
| **Apply On**        | {{ $application['Date_of_Registration'] }}         |

Thanks,<br>
{{ config('app.name') }}
@endcomponent
