# Integrate Mailchimp API with PHP using Angular Forms
<p>Mailchimp is one of the most famous free online email marketing software. Sending email newsletter with mailchimp, it is also easy to integrate email signup form in web application as well as website. Today I am going to show you how to integrate custom web from with mailchimp by PHP. </p>


<h2>What you have need?</h2>
<ul>
<li><a href="https://login.mailchimp.com/signup?">Account with Mailchimp</a> ( Beside premium account, there is a free sign up option where you can send 12000 emails to 2000 recipients per month)</li>
<li>Project using Angular forms our Jquery</li>
<li>Mailchimp PHP API class (Download in project)</li>
</ul>
<br>
<h2>Get Account Mailchimp API and List ID:</h2>

For getting mailchimp account API, you have to login in mailchimp account-
<ul>
  <li>  go to your Account Settings -> Extras -> API Keys</li>
   <li> Click on Create a Key button and sure enough that you will get your API key.</li>
</ul>
Now you have to choose in which list you want to store all of your subscribers information. In this case, you have to create a list in List option.
<ul>
  <li>   go to Lists section, Create a new List.</li>
    <li> enter created list and find Settings->List name & defaults. Then you will find List ID</li>
</ul>
<h2>Update a listID  and ApiKey:</h2>
 ```php
 ('./mail/mailchimp.php'); 
 ```

 
 ```js
    // MailChimp API credentials
        $apiKey = 'your api key';
        $listID = 'your list id';
 ```
<h2>Create Function in controler.js </h2>
```js
 $scope.subscriber_email=function()
    {

    	$scope.SubEmail;
    	$scope.SubEmail=$scope.SubscribeEmail;
	
		if ($scope.SubEmail == undefined || $scope.SubEmail == "") {
			
			angular.element('#subscriber_email').focus();
			return false;
		}
		else
		{
			
			$scope.atpos = $scope.SubEmail.indexOf("@");
			$scope.dotpos = $scope.SubEmail.lastIndexOf(".");
			if ($scope.atpos<1 || $scope.dotpos<$scope.atpos+2 || $scope.dotpos+2>=$scope.SubEmail.length) {
				alert("Not a valid e-mail address");				
		    	return false;
			}
		}

	
		// //Datastring pass to mail.php
		$scope.dataString = '&subscriber_email=' + $scope.SubEmail;
		$scope.form = $(this);
		$scope.form.serialize();
		$.ajax({
		type: "POST", url: "mail/mailchimp.php",	data: $scope.dataString, success: function() {
			alert('You are subscribe with our newsletter');
			$(".btn-subscribe").attr('disabled','true');
			}
		});
    };
```
   <h2> Creat a form</h2>
   ```html
   <form>
	    <div class="form-group">
		      <input type="text" class="form-control" name="subscriber_email" id="subscriber_email" required="" data-ng-        model="SubscribeEmail">
   		    <label for="subscriber_email">Input type email</label>
    	</div>
   	  <button type="button" data-angular-ripple data-ng-click="subscriber_email()">Subscribe</button>
   </form>
```

<h2>For more functions read Documentation MailChimp API:</h2> 
<a href="http://developer.mailchimp.com/documentation/mailchimp/">http://developer.mailchimp.com/documentation/mailchimp/</a> 
