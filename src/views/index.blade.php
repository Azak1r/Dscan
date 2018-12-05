<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DScan Reporter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="inputbootstrap here" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="inputbootstrap" rel="stylesheet">


   
  </head> 

  <body>

    <div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="">
          </a> 
          
          <!-- BEGIN: Hide if not in display mode -->  
          
            <ul class="nav" >
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Reported by 
                  <b class="caret"></b>
                </a>
              
              </li>
            </ul>
            
            <ul class="nav" >
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <b class="caret"></b>
                </a>
                
              </li>
            </ul>
            
            <p class="navbar-text">At ... EVE Time</p>            
                   
            <!-- END: Hide if not in display mode -->     
             
        </div>
      </div>
    </div>    
       

    <div class="container">
    
    <!-- BEGIN: Submit form --> 
    <div class="row" >
        <div class="span12">    
          <form class="form-horizontal" method="post">
              <div class="control-group">            
                <div class="controls">
                  <textarea id="inputDScan" name="inputDScan" rows="15" class="span8" placeholder="Paste your DScan here..."></textarea>
                </div>
              </div>          
              <div class="control-group">
                <div class="controls">              
                  <button type="submit" name="formSubmit" value="Submit" class="btn btn-primary btn-large">Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>
    
    <!-- END: Submit form -->