<!DOCTYPE html>
<html>
<head>
	<title>contacts - @yield('title')</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/business-frontpage.css') }}">
	<style type="text/css">

		.stepwizard-step p {
			margin-top: 10px;
		}

		.stepwizard-row {
			display: table-row;
		}

		.stepwizard {
			display: table;
			width: 100%;
			position: relative;
		}

		.stepwizard-step button[disabled] {
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
		}

		.stepwizard-row:before {
			top: 14px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 1px;
			background-color: #ccc;
			z-order: 0;

		}

		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}

		.btn-circle {
			width: 30px;
			height: 30px;
			text-align: center;
			padding: 6px 0;
			font-size: 12px;
			line-height: 1.428571429;
			border-radius: 15px;
		}</style>

		
	</head>

	<body >
		<div class="container-fluid" >
			@include('partials.menuOp')
			@yield('content')
			@include('partials.footer')
		</div>
		<script type="text/javascript" src=" {{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/select2.full.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/jquery.steps.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/jquery.steps.js') }}"></script>

		<script type="text/javascript">
			$(document).ready(function () {

				var navListItems = $('div.setup-panel div a'),
				allWells = $('.setup-content'),
				allNextBtn = $('.nextBtn');

				allWells.hide();

				navListItems.click(function (e) {
					e.preventDefault();
					var $target = $($(this).attr('href')),
					$item = $(this);

					if (!$item.hasClass('disabled')) {
						navListItems.removeClass('btn-primary').addClass('btn-default');
						$item.addClass('btn-primary');
						allWells.hide();
						$target.show();
						$target.find('input:eq(0)').focus();
					}
				});

				allNextBtn.click(function(){
					var curStep = $(this).closest(".setup-content"),
					curStepBtn = curStep.attr("id"),
					nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
					curInputs = curStep.find("input[type='text'],input[type='url']"),
					isValid = true;

					$(".form-group").removeClass("has-error");
					for(var i=0; i<curInputs.length; i++){
						if (!curInputs[i].validity.valid){
							isValid = false;
							$(curInputs[i]).closest(".form-group").addClass("has-error");
						}
					}

					if (isValid)
						nextStepWizard.removeAttr('disabled').trigger('click');
				});

				$('div.setup-panel div a.btn-primary').trigger('click');
			});
		</script>




	</body>
	</html>