<form class="form-horizontal" action='register.php' method="POST">
    <fieldset>
        <div id="legend">
            <legend class="">Register</legend>
        </div>
        <div class="control-group">
            <!-- First name -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
                <input type="text" id="first-name" name="username" placeholder="" class="input-xlarge">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Surname-->
            <label class="control-label"  for="firstName">First Name</label>
            <div class="controls">
                <input type="text" id="surname" name="firstName" placeholder="" class="input-xlarge">
                <p class="help-block">First name can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Surname-->
            <label class="control-label"  for="surname">Surname</label>
            <div class="controls">
                <input type="text" id="surname" name="surname" placeholder="" class="input-xlarge">
                <p class="help-block">Surname name can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                <p class="help-block">Please provide your E-mail</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                <p class="help-block">Password should be at least 4 characters</p>
            </div>
        </div>


        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Register</button>
            </div>
        </div>
    </fieldset>
</form>