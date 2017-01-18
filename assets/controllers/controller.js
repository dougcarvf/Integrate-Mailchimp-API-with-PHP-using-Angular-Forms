
app.controller('MyController', function ($scope,$document, $anchorScroll,$window, $timeout,$compile) {

       /*Subscriber mail chimp start    */
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
   /* Subscriber mail chimp End*/



  




})

