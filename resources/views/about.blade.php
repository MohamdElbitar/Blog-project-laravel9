<!DOCTYPE html>
<html>
<head>
                  <style>
      /*Internal CSS using element name*/
            body{background-color:lavender;
             text-align: center;}
             h2{font-style: italic;
              font-size: 30px;
              color: #f08080;}
            p{font-size: 20px;}
        /*Internal CSS using class name*/
            .blue{color: blue;}
            .red{color: red;}
            .green{color: green;}
      </style>
    </head>
  <body>
   <h2>This is about page</h2>
   <a href="{{ route('contact.page') }}">Contact Page</a>
    <p class="blue">This is a blue color paragraph</p>
    <p class="red">This is a red color paragraph</p>
    <p class="green">This is a green color paragraph</p>
  </body>
</html>

