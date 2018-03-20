
    <li>
    <?php  if(logged_in()) {  ?>

        <a href="/logout/dashboard/">
            <p class="">Logout</p>
        </a>

    <?php  } else { ?>

        <a href="/login/dashboard/">
            <p class="">Login</p>
        </a>

    <?php  } ?>

    </li>
