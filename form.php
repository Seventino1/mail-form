<form name="contactForm" method="POST" action="<?php echo admin_url('admin-ajax.php?action=send_mail'); ?>">
    <input type="hidden" name="project_name" value="Заявка на консультацию">
    <input class="name" type="text" name="name" placeholder="Как тебя зовут?" />
    <input class="phone" type="text" name="phone" placeholder="Напиши свой номер" />
    <button type="submit"> <img src="<?php echo get_template_directory_uri(); ?>/media/Arrow_3.png" alt="arrow" /> </button>
</form>

