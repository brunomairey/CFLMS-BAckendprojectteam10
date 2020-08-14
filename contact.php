<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <style type="text/css">
    

    .contactForm {
    margin: 2vw; 
    padding: 2vw; 
    background-color: #f5f5f5; 
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; }

h1 {
    background-color: #356482;
    color: white; 
    width: 100%;
    padding: 20px;
    margin: 40px 0;
    border-radius: 10px; }

label, input, textarea { 
    width: 100%; 
    border: none;}

label {
    font-size: 1.3em; }

input {
    height: 50px;
    font-size: 1.3em; }

  </style>
</head>
<body>
<?php 

include 'db_connect.php'; ?>



  <div class="container">
  <form [formGroup]="info" (ngSubmit)="onSubmit()" class="contactForm">
      <h1 class="text-center">Any Doubt? Please Contact me</h1>
      <div class="form-group">
          <label>
              First Name:
              <input type="text" class="form-control" formControlName="firstName" autofocus>
          </label>
      </div>
     <div class="form-group">
          <label>
              Last Name:
              <input type="text" class="form-control" formControlName="lastName">
          </label>
      </div>
      <div class="form-group">
          <label>
              Email:
              <input type="email" class="form-control" formControlName="email">
          </label>
      </div>
      <label>
          Your message:
          <textarea class="form-control" rows="5" formControlName="message"></textarea>
      </label>
      <br>
     <div class="my-5">
          <input type="submit" class="btn btn-dark" value="Send" style="width: 15vw; background-color: #FB8537; border: solid #FB8537">
      </div>
    </form>
</div>


</body>
</html>