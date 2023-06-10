<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <?php 
         try{
             \DB::connection()->getPDO();
              dump('DB:' . \DB::connection()->getDatabaseName());
        }
        catch(\Exception $e) {
            dump('DB: '. 'None');
        }
        ?>

    </body>
</html>
