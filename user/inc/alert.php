<?php

if (isset($_GET['alert'])) {
	switch ($_GET['alert']) {
		case 'd_s':
			?>
				<script>
					swal('Deposit Requested', 'Verification in Progress', 'success');
				</script>
			<?php
		break;
	}
}

?>