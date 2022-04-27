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

	/*.logo{
			background: red;
			height: 10%;
			width: 100%;
		}*/
	.user-d {
		/*background-color: red;*/
		height: 100%;
		width: 100%;
		display: flex;
	}

	.user-a .style {
		height: 520px;
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
		font-family: serif;
		color: #085685;
	}

	.name-output {
		/*background-color: blue;*/
		height: 40px;
	}

	.name-label-output {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
	}

	.email {
		/*background-color: yellow;*/
	}

	.email .email-label {
		font-size: 25px;
		font-family: serif;
		color: #085685;
	}

	.email-output {
		/*background-color: blue;*/
		height: 40px;
	}

	.email-label-output {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
	}

	.idno {
		/*background-color: yellow;*/
	}

	.idno .idno-label {
		font-size: 25px;
		font-family: serif;
		color: #085685;
	}

	.idno-output {
		/*background-color: blue;*/
		height: 40px;
	}

	.idno-label-output {
		height: 30px;
		width: 350px;
		margin-top: 5px;
		border: 2px solid #085685;
		border-radius: 6px;
		text-align: center;
		font-family: serif;
	}

	.btn {
		/*background-color: red;*/
		height: 40px;
		width: 100%;
		display: flex;
	}

	.btn .submit-btn {
		/*background-color: green;*/
		height: 35px;
		width: 100%;
		margin-top: 3px;
	}

	.submit-btn button {
		height: 34px;
		width: 150px;
		background-color: #085685;
		border-radius: 4px;
	}

	.submit-btn .btn-click {
		color: white;
		text-decoration: none;
		font-size: 20px;
		font-family: serif;
	}
</style>
@endpush
<form action="{{ route('bankDetails.edit', auth()->id()) }}" method="POST">
	@csrf
	@method('PUT')

	<div class="user-a">
		<div class="style">
			<div class="user-font">
				<h3>BANK DETAILS</h3>
			</div>
			<div class="details">
				<form>
					<div class="name">
						<label class="name-label">Account Number</label>
						<div class="name-output">
							<input class="name-label-output" type="text" name="" placeholder="Account Number" value="">
						</div>
					</div>

					<div class="email">
						<label class="email-label">Account Name</label>
						<div class="email-output">
							<input class="email-label-output" type="text" name="" placeholder="Account Name" value="">
						</div>
					</div>

					<div class="idno">
						<label class="idno-label">Bank Name</label>
						<div class="idno-output">
							<input class="idno-label-output" type="text" name="" placeholder="Bank Name" value="">
						</div>
					</div>

					<div class="idno">
						<label class="idno-label">Branch Name</label>
						<div class="idno-output">
							<input class="idno-label-output" type="text" name="" placeholder="Branch Name" value="">
						</div>
					</div>

					<div class="idno">
						<label class="idno-label">IFSC Code</label>
						<div class="idno-output">
							<input class="idno-label-output" type="text" name="" placeholder="IFSC Code" value="">
						</div>
					</div>
				</form>


				<div class="btn">
					<div class="submit-btn">
						<button><a class="btn-click" href="">Submit</a></button>
					</div>
				</div>
			</div>

		</div>
	</div>
</form>