@push('css')
<style>
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}

	body {
		background-color: #8D9FA5;
		background-size: cover;
		background-position: center;

		font-family: sans-serif;
	}

	.menu-bar {
		background: #085685;
		text-align: center;
		height: 70px;
	}

	.menu-bar ul {
		display: inline-flex;
		list-style: none;
		color: #fff;
	}

	.menu-bar ul li {
		width: 120px;
		margin: 15px;
		padding: 15px;
	}

	.menu-bar ul li a {
		text-decoration: none;
		color: #fff;
	}

	.active,
	.menu-bar ul li:hover {
		background: #2bab0d;
		border-radius: 6px;
	}

	.menu-bar .fa {
		margin-right: 4px;
	}

	.sub-menu-1 {
		display: none;
	}

	.menu-bar ul li:hover .sub-menu-1 {
		display: block;
		position: absolute;
		background: #085685;
		margin-top: 15px;
		margin-left: -15px;
	}

	.menu-bar ul li:hover .sub-menu-1 ul {
		display: block;
		margin: 10px;
	}

	.menu-bar ul li:hover .sub-menu-1 ul li {
		width: 150px;
		padding: 10px;
		border-bottom: 1px dotted #fff;
		background: transparent;
		border-radius: 0;
		text-align: left;
	}

	.menu-bar ul li:hover .sub-menu-1 ul li:last-child {
		border-bottom: none;
	}

	/* change color of link when mouse pointer go */
	.menu-bar ul li:hover .sub-menu-1 ul li a:hover {
		color: #b2ff00;
	}

	.fa-angle-right {
		float: right;
	}

	.sub-menu-2 {
		display: none;
	}

	.hover-me:hover .sub-menu-2 {
		position: absolute;
		display: block;
		margin-top: -40px;
		margin-left: 120px;
		background: rgb(0, 100, 0);
	}

	.logo {
		background: #f1000000;
		text-align: left;
	}

	.logo img {
		width: 10%;
		height: 10%;
	}

	.logo h1 {
		color: white;
		text-align: center;

	}

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
							<input class="email-label-input" type="text" name="" placeholder="email"
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