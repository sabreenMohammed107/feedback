@extends('layout.web')

@section('content')
<div class="bg-container-contact100" style="background-image: url({{ asset('webasset/images/accomplishment-ceremony-education-graduation-267885.jpg')}});">
		<div class="contact100-header flex-sb-m">
			<a href="#" class="contact100-header-logo">
				<!--<img src="images/icons/logo.png" alt="LOGO">-->
			</a>

			<div>
				<button class="btn-show-contact100">
					We appreciate our clients feedback
				</button>
			</div>
		</div>
	</div>
   
	<div class="container-contact100">
		<div class="wrap-contact100">
			<!--<button class="btn-hide-contact100">
				<i class="zmdi zmdi-close"></i>
			</button>-->
            @if ($message =Session::get('message'))
   
   <div id="alertDiv" class="alert alert-info alert-block">
<button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>	
   <strong style="color:black;font-weight:bold">{{ $message }}</strong>
</div>


@endif
			<div class="contact100-form-title" style="background-image: url({{ asset('webasset/images/cover.png')}});">
				<!--<span>Contact Us</span>-->
			</div>

			<form class="contact100-form validate-form" dir="rtl" action="{{url('/sendMessage')}}" method="POST">
							@csrf
				<div class="wrap-input100 validate-input">
					<input id="name" class="input100" type="text" name="full_name" placeholder="إدخل الأسم بالكامل">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="mobile_num" class="input100" type="text" name="mobile_num" placeholder="رقم الواتس اب">
					<span class="focus-input100"></span>
					<label class="label-input100" for="mobile_num">
						<span class="lnr lnr-smartphone m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 ">
					<input id="education" class="input100" type="text" name="education" placeholder="مجال دراستك">
					<span class="focus-input100"></span>
					<label class="label-input100" for="education">
						<span class="lnr lnr-graduation-hat m-b-2"></span>
					</label>
                </div>
                <div class="wrap-input100 ">
					<input id="job" class="input100" type="text" name="job" placeholder="وظيفتك الحالية">
					<span class="focus-input100"></span>
					<label class="label-input100" for="job">
						<span class="lnr lnr-pencil m-b-2"></span>
					</label>
                </div>
                
                <div class="wrap-input100 ">
					<input id="student_course" class="input100" type="text" name="student_course" placeholder="الدورة اللى درستها معانا">
					<span class="focus-input100"></span>
					<label class="label-input100" for="student_course">
						<span class="lnr lnr-book m-b-2"></span>
					</label>
				</div>

                <div class="wrap-input100 ">
					<input id="course_trainer" class="input100" type="text" name="course_trainer" placeholder="المحاضر اللى درست معاه">
					<span class="focus-input100"></span>
					<label class="label-input100" for="course_trainer">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
                </div>

                <div class="wrap-input100 ">
					<input id="benift_berc" class="input100" type="number" name="benift_berc" placeholder="نسبه إستفادتك من الكورس %">
					<span class="focus-input100"></span>
					<label class="label-input100" for="benift_berc">
						<span class="lnr lnr-smile m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 ">
					<textarea id="note" class="input100" name="note" placeholder="ملاحظاتك الايجابية / السلبية"></textarea>
					<span class="focus-input100"></span>
					<label class="label-input100 rs1" for="note">
						<span class="lnr lnr-bubble"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Now
					</button>
				</div>
			</form>
		</div>
	</div>

@endsection