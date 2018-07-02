<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" >
    <head>
        <?php require '../resources/views/header.php'; ?>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <p class='display-1'> Login </p>
            <form class='form-group'>
                <div class="input-group">
                    <label> Email </label>
                    <input class='form-control' type='text'/>
                </div>
                <div class="input-group">
                    <label> Senha </label>
                    <input class='form-control' type='password'/>
                </div>
                <input class='btn btn-danger' type='submit'/>
            </form>
        </div>
    </body>
</html>