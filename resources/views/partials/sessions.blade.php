@if(session('success'))
	<script>
		new Noty([
				type: 'success',
				layouts: 'topRight',
				text: "{{session('success')}",
				timeout: 2000,
				killer:true,
			]).show();
	</script>
@endif