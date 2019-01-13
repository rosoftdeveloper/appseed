$(function() {
	var required = ["email", "password"];

	var $form = {
		email: $("#email"),
		password: $("#password"),
	};

	function setInvalid($el) {
		$el
			.addClass("is-invalid")
			.closest(".input-group")
			.addClass("has-danger");
		return false;
	}

	function setValid($el) {
		$el
			.removeClass("is-invalid")
			.closest(".input-group")
			.removeClass("has-danger");

		return true;
	}

	function validate($el) {
		return $el.val().length < 2 ? setInvalid($el) : setValid($el);
	}

	function isFieldValid(field) {
		return validate($form[field]);
	}

	required.forEach(function(field) {
		$form[field].on("blur", function(e) {
			validate($form[field]);
		});
	});

	$("#submit").on("click", function() {
		var validated = required.map(isFieldValid).filter(Boolean);
		var isValid = validated.length === required.length;

		$("#reply_error").removeClass("d-none");

		if (isValid) {
			var data = {
				email: $form.email.val(),
				password: $form.password.val(),
			};

			var settings = {
				type: "POST",
				url: "/api/login",
				data: JSON.stringify(data),
				contentType: "application/json",
				dataType: "json",
			};

			$.ajax(settings)
				.done(function(reply) {
					if (reply && reply.success) {
						window.location.href = "/";
					}
				})
				.fail(function(response) {
					var reply = response.responseJSON;

					$("#reply_error")
						.text(reply.message)
						.removeClass("d-none");
				});
		}
	});
});
