<?php
/*
|--------------------------------------------------------------------------
| CUSTOM DEVELOPER TOOLS / ROUTE AND FUNCTION OUTPUT
|--------------------------------------------------------------------------
| Custom route to output a easy to copy and paste list of all routes and ways you can use them.
| VERY HELPFUL FOR DEVELOPERS
*/

Route::get('/r', function ()
{

    /**
     * undocumented function
     *
     * @return void //ouputs a list of routes and easy ways to use them.
     * @author Phillip Madsen <contact@affordableprogrammer.com>
     **/
    function philsroutes()
    {
        $i=0;
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">';
        echo '<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>';
        echo "<div style='margin-top:50px'></div><div class='container'><div class='col-md-12 table-responsive'>";
        echo "<table id='table' data-toggle='table' class='table table-condensed' style='width:100%'>";
        echo '<thead>';
        echo '<tr>';
        echo "<th width='5%'> </th>";
        echo "<th width='10%'><h4>Method</h4></th>";
        echo "<th width='25%'><h4>URL</h4></th>";
        echo "<th width='25%'><h4>Route Name</h4></th>";
        echo "<th width='30%'><h4>Corresponding Action</h4></th>";
        echo '</tr>';
        echo '<thead>';

        foreach ($routeCollection as $value)
        {
            $number = $i++;
            $secretrow = "secretrow";
            echo '<tr data-toggle="collapse" data-target="#'.$secretrow.$number.'" class="accordion-toggle">';
            echo '<td><button type="button" class="btn btn-info btn-md"><i class="glyphicon glyphicon-plus"></i></button></td>';
            echo '<td>' . $value->getMethods()[0] . '</td>';
            echo "<td  style='font-family:Inconsolata;font-size: 1.25em;''><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . '</a> </td>';
            echo '<td>' . $value->getName() . '</td>';
            echo '<td>' . $value->getActionName() . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="12" class=""> <div class="accordian-body collapse table-responsive" id="'.$secretrow.$number.'"><div style="clear:both"></div>';
            echo '<table class="table table-bordered"><thead><tr><td><a target="_blank" href="' . $value->getPath() . '"><strong>Visit This Link</strong></a></td></tr><tr><th>Copy Url</th></tr></thead>';
            echo '<tbody>';
            echo '<tr><td align="left"><pre style="font-family: Inconsolata;font-size: 1.25em;">{!! url(\'' . $value->getPath() . '\') !!}</pre></td></tr>';
            echo '<tr><td><strong>Copy Form Url</strong></td></tr>';
            echo '<tr><td align="left"><pre style="font-family:Inconsolata;font-size: 1.25em;">{!! Form::open([\'url\' => \'' . $value->getPath() . '\', \'method\' => \'post\', \'files\' => true]) !!}</pre></td></tr>';
            echo '<tr><td align="left"><strong>Copy Url Route</strong> </td></tr>';
            echo '<tr><td align="left"><pre style="font-family: Inconsolata;font-size: 1.25em;">{!! route(\'' . $value->getName() . '\') !!}</pre></td></tr>';
            echo '<tr><td align="left"><strong>Copy Form:: Route</strong> </td></tr>';
            echo '<tr><td align="left"><pre style="font-family:Inconsolata;font-size: 1.25em;">{!! Form::open([\'route\' => \''. $value->getName() .'\', \'method\' => \'post\', \'files\' => true]) !!}</pre></td></tr>';
            echo '<tr><td align="left"><strong>Copy Url Action</strong> </td></tr>';
            echo '<tr><td align="left"><pre style="font-family:Inconsolata;font-size: 1.25em;">{!! action(\'' . $value->getActionName() . '\']) !!}</pre></td></tr></tr>';
            echo '<tr><td align="left"><strong>Copy Form:: Action</strong> </td></tr>';
            echo '<tr><td align="left"><pre style="font-family:Inconsolata;font-size: 1.25em;"> {!! Form::open([\'action\' => \'' . $value->getActionName() . '\', \'method\' => \'post\', \'files\' => true]) !!}</pre></td></tr>';
            echo '</tbody></table></div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';

    }

	/** @noinspection PhpVoidFunctionResultUsedInspection */
	return philsroutes();
});

Route::get('env', function () {
    dd(App::environment());
});

Route::get('info', function () {
    if (App::environment() != 'production') {
        phpinfo();
    }
});

Route::get('/rr', function ()
{
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo "<div class='container'><div class='col-md-12'><table class='table table-striped' style='width:100%'>";
        echo '<tr>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='30%'><h4>URL</h4></td>";
        echo "<td width='30%'><h4>Route</h4></td>";
        echo "<td width='30%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';
        foreach ($routeCollection as $value)
        {
            echo '<tr>';
            echo '<td>' . $value->getMethods()[0] . '</td>';
            echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . '</a> </td>';
            echo '<td>' . $value->getName() . '</td>';
            echo '<td>' . $value->getActionName() . '</td>';
            echo '</tr>';
        }
        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
    }
    return philsroutes();
});


Route::get('migrate', function () {
    \Artisan::call('migrate:refresh');
    return '<pre>' . \Artisan::output() . '</pre>';
//  return '<a href="' . $value->getPath() . '"  target="_blank">' . \Artisan::output() . '</a>';
//  echo "<td><a href='" . $value->getPath() . "' target='_blank'>' . \Artisan::output() . '</a>    </td>";
});

Route::get('routes', function () {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';

});

Route::get('/paths', function () {
    function philspaths()
    {
        // $routeCollection = Route::getRoutes();
        foreach (Route::getRoutes() as $route) {
            $compiled = $route->getCompiled();
            if(!is_null($compiled))
            {
				/** @noinspection ForgottenDebugOutputInspection */
				var_dump($compiled->getStaticPrefix());
            }
        }
    }

	/** @noinspection PhpVoidFunctionResultUsedInspection */
	return philspaths();
});

Route::get('env', function () {
    dd(App::environment());
});

Route::get('info', function () {
    if (App::environment() != 'production') {
        phpinfo();
    }
});
