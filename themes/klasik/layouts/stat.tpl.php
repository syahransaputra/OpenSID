<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
			<div id="contentwrapper">
				<div id="contentcolumn">
					<div class="innertube">
						<?php if ($tipe == 2): ?>
						<?php elseif ($tipe == 3): ?>
							<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/wilayah.php')); ?>
						<?php elseif ($tipe == 4): ?>
							<?php $this->load->view('statistik/dpt.php'); ?>
						<?php else: ?>
							<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/statistik.php')); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div id="rightcolumn">
				<div class="innertube">
					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/side.right.php'));?>
				</div>
			</div>

			<div id="footer">
				<?php
				$this->load->view($folder_themes.'/partials/copywright.tpl.php');
				?>
			</div>
		</div>
	</body>
</html>
