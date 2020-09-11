if (!empty($_SESSION['login_user'])){
			echo ("<script type='text/javascript'>
			window.alert('Você já está logado!')
			window.location.href='index.php';
			</script>");
			
		}