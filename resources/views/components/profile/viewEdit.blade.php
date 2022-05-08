@push('css')
<<<<<<< HEAD
  <style>
   
		
=======
<style>
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
>>>>>>> 7346467a7a40824303b284637deb22dfde09c586

	body {
		background-color: #8D9FA5;
		background-size: cover;
		background-position: center;

<<<<<<< HEAD
		}
		.user-d{
			/*background-color: red;*/
			height: 100%;
			width: 100%;
			display: flex;
		}
		.user-d .styling{
			height: 450px;
			width: 800px;
			background-color: orange;
			text-align: center;
			margin-left: 15%;
			border-radius: 10px;
			margin-top: 50px;
			border: 2px solid green;
		}
		.user-font{
			color: white;
			font-size: 25px;
			background-color: #6f42c1;
			margin-top: 0px;
			height: 50px;
			padding-top: 10px;
			border-radius: 6px;
		}
=======
		font-family: sans-serif;
	}
>>>>>>> 7346467a7a40824303b284637deb22dfde09c586

	

	.user-d {
		/*background-color: red;*/
		height: 100%;
		width: 100%;
		display: flex;
	}

	.user-d .styling {
		height: 450px;
		width: 800px;
		background-color: orange;
		text-align: center;
		margin-left: 15%;
		border-radius: 10px;
		margin-top: 50px;
		border: 2px solid green;
	}

	.user-font {
		color: white;
		font-size: 25px;
		background-color: #085685;
		margin-top: 0px;
		height: 50px;
		padding-top: 10px;
		border-radius: 6px;
	}

	.details {
		/*background-color: red;*/

	}

	.name {
		/*background-color: yellow;*/
	}

	.name .name-label {
		font-size: 25px;
		color: #085685;
	}

	.name-input {
		/*background-color: blue;*/
		height: 40px;
	}

	.name-label-input {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
		font-size: 15px;
	}

	.email {
		/*background-color: yellow;*/
	}

	.email .email-label {
		font-size: 25px;
		color: #085685;
	}

	.email-input {
		/*background-color: blue;*/
		height: 40px;
	}

	.email-label-input {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
		font-size: 15px;
	}

	.idno {
		/*background-color: yellow;*/
	}

	.idno .idno-label {
		font-size: 25px;
		color: #085685;
	}

	.idno-input {
		/*background-color: blue;*/
		height: 40px;
	}

	.idno-label-input {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
		font-size: 15px;
	}

	.mobileno {
		/*background-color: yellow;*/
	}

	.mobileno .mobileno-label {
		font-size: 25px;
		color: #085685;
	}

	.mobileno-input {
		/*background-color: blue;*/
		height: 40px;
	}

	.mobileno-label-input {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
		font-size: 15px;
	}

	.btn {
		height: 70px;
		/*background-color: red;*/
		width: 100%;
	}

	.btn .edit-btn {
		height: 40px;
		width: 100%;
		/*background-color: yellow;*/
	}

	.edit-btn .edit-btn-link {
		height: 40px;
		width: 150px;
		background-color: #085685;
		border-radius: 6px;
		margin-top: 15px;
		color: white;
		text-decoration: none;
		font-size: 25px;
		font-family: serif;
	}
</style>
@endpush

<form action="{{ route('profile.edit', auth()->id()) }}" method="POST">
	@csrf
	@method('PUT')

	@if (session('success'))
	<div class="alert alert-success mt-2">
		{{ session('success') }}
	</div>
	@endif

	<div class="user-d">
		<div class="styling">
			<div class="user-font">
				<h3>MY PROFILE</h3>
			</div>
			<div class="details">
				<form>
					<div class="name">
						<label class="name-label">Name</label>
						<div class="name-input">
							<input class="name-label-input" type="text" name="name" placeholder="User Name"
								value="{{ auth()->user()->name }}">
						</div>
					</div>

					<div class="email">
						<label class="email-label">Email</label>
						<div class="email-input">
							<input class="email-label-input" type="text" name="email" placeholder="email"
								value="{{ auth()->user()->email }}" />
						</div>
					</div>

					<div class="idno">
						<label class="idno-label">Id No.</label>
						<div class="idno-input">
							<input class="idno-label-input" type="text" name="" placeholder="id no." value="">
						</div>
					</div>

					<div class="mobileno">
						<label class="mobileno-label">Mobile No.</label>
						<div class="mobile-input">
							<input class="mobileno-label-input" type="text" name="phone" placeholder="Mobile No."
								value="{{ auth()->user()->phone }}" />
						</div>
					</div>

					<div class="btn">
						<div class="edit-btn">
							<input class="edit-btn-link" type="submit" value="Edit">
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</form>
@push('scripts')
<script src="{{ asset('js/closeAlert.js') }}"></script>
@endpush