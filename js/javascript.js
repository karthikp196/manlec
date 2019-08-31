$(document).ready(function()
{

alert("hai");

	$("#btn").on("click",function(e)
	{
		e.preventDefault();

		var name = $("#name").val();

		var email = $("#email").val();

		var subject = $("#subject").val();

		var message = $("#message").val();

		var name_len = name.length;
		var email_len = email.length;
		var subject_len = subject.length;
		var message_len = message.length;

		if(name_len==0){
			$('.err').html("please Enter your name");
		}
		else if(email_len==0){
			$('.err').html("please Enter your email");
		}
		else if(subject_len==0){
			$('.err').html("please Enter subject");
		}
		else if(message_len==0){
			$('.err').html("please Enter your message");
		}

		else{

			var data = "name="+name+"&email="+email+"&subject="+subject+"&message="+message;

			alert(data);

				$.ajax(
				{
					url:"data.php",
					type:"POST",
					data:data,
					dataType:"text",
					success:function(data)
					{
						alert(data);
					}

				});

				$('.err').hide();

				$(".success_section").fadeOut(5000);

		}


		




	});






















});