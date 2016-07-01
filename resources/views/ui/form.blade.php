@extends('layout.ui')



@section('ui')


    <div class="wrapper-md" ng-controller="FormDemoCtrl">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading font-bold">Basic form</div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" checked="" disabled=""><i></i> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading font-bold">Horizontal form</div>
                <div class="panel-body">
                    <form class="bs-example form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" placeholder="Email">
                                <span class="help-block m-b-none">Example block-level help text here.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox">
                                    <label class="i-checks">
                                        <input type="checkbox" checked=""><i></i> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-sm btn-info">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading font-bold">
            Inline form
        </div>
        <div class="panel-body">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                </div>
                <div class="checkbox m-l m-r-xs">
                    <label class="i-checks">
                        <input type="checkbox"><i></i> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
        <span ng-controller="ModalDemoCtrl">
          <script type="text/ng-template" id="myModalContent.html">
              <div ng-include="'tpl/modal.form.html'"></div>
          </script>
          <button class="btn btn-success" ng-click="open('lg')">Form in a modal</button>
        </span>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading font-bold">
            Form elements
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="get">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Rounded</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control rounded">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">With help</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                        <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">Label focus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-id-1">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Placeholder</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="placeholder">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Disabled</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="Disabled input here..." disabled="">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Static control</label>
                    <div class="col-lg-10">
                        <p class="form-control-static">email@example.com</p>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Checkboxes and radios</label>
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Inline checkboxes</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option1"> a
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option2"> b
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option3"> c
                        </label>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">CSS3 Checkboxes &amp; radios</label>
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" value="">
                                <i></i>
                                Option one
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" checked="" value="">
                                <i></i>
                                Option two checked
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" checked="" disabled="" value="">
                                <i></i>
                                Option three checked and disabled
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" disabled="" value="">
                                <i></i>
                                Option four disabled
                            </label>
                        </div>
                        <div class="radio">
                            <label class="i-checks">
                                <input type="radio" name="a" value="option1">
                                <i></i>
                                Option one
                            </label>
                        </div>
                        <div class="radio">
                            <label class="i-checks">
                                <input type="radio" name="a" value="option2" checked="">
                                <i></i>
                                Option two checked
                            </label>
                        </div>
                        <div class="radio">
                            <label class="i-checks">
                                <input type="radio" value="option2" checked="" disabled="">
                                <i></i>
                                Option three checked and disabled
                            </label>
                        </div>
                        <div class="radio">
                            <label class="i-checks">
                                <input type="radio" name="a" disabled="">
                                <i></i>
                                Option four disabled
                            </label>
                        </div>

                        <div class="radio">
                            <label class="i-checks i-checks-sm">
                                <input type="radio" name="a">
                                <i></i>
                                Small size radio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="i-checks i-checks-sm">
                                <input type="checkbox">
                                <i></i>
                                Small size checkbox
                            </label>
                        </div>
                        <div class="m-b-xs m-t">
                            <label class="i-checks i-checks-lg">
                                <input type="radio" name="a">
                                <i></i>
                                Large size radio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="i-checks i-checks-lg">
                                <input type="checkbox">
                                <i></i>
                                Large size checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Inline checkboxes</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline i-checks">
                            <input type="checkbox" value="option1"><i></i> a
                        </label>
                        <label class="checkbox-inline i-checks">
                            <input type="checkbox" value="option2"><i></i> b
                        </label>
                        <label class="checkbox-inline i-checks">
                            <input type="checkbox" value="option3"><i></i> c
                        </label>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Switch</label>
                    <div class="col-sm-10">
                        <label class="i-switch m-t-xs m-r">
                            <input type="checkbox" checked="">
                            <i></i>
                        </label>
                        <label class="i-switch bg-info m-t-xs m-r">
                            <input type="checkbox" checked="">
                            <i></i>
                        </label>
                        <label class="i-switch bg-primary m-t-xs m-r">
                            <input type="checkbox" checked="">
                            <i></i>
                        </label>
                        <label class="i-switch bg-danger m-t-xs m-r">
                            <input type="checkbox" checked="">
                            <i></i>
                        </label>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Radio Switch</label>
                    <div class="col-sm-10">
                        <label class="i-switch bg-primary m-t-xs m-r">
                            <input type="radio" name="switch" checked="">
                            <i></i>
                        </label>
                        <label class="i-switch bg-warning m-t-xs m-r">
                            <input type="radio" name="switch">
                            <i></i>
                        </label>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Switch size</label>
                    <div class="col-sm-10">
                        <label class="i-switch i-switch-md bg-info m-t-xs m-r">
                            <input type="checkbox" checked="">
                            <i></i>
                        </label>
                        <label class="i-switch i-switch-lg bg-dark m-t-xs m-r">
                            <input type="checkbox">
                            <i></i>
                        </label>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Select</label>
                    <div class="col-sm-10">
                        <select name="account" class="form-control m-b">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                        <div class="col-lg-4 m-l-n">
                            <select multiple="" class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group has-success">
                    <label class="col-sm-2 control-label">Input with success</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group has-warning">
                    <label class="col-sm-2 control-label">Input with warning</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group has-error">
                    <label class="col-sm-2 control-label">Input with error</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Control sizing</label>
                    <div class="col-sm-10">
                        <input class="form-control input-lg m-b" type="text" placeholder=".input-lg">
                        <input class="form-control m-b" type="text" placeholder="Default input">
                        <input class="form-control input-sm" type="text" placeholder=".input-sm">
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Column sizing</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder=".col-md-2">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder=".col-md-3">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder=".col-md-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Input groups</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group m-b">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="input-group m-b">
              <span class="input-group-addon">
                <input type="checkbox">
              </span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
              <span class="input-group-addon">
                <input type="radio">
              </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Button addons</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">With dropdowns</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b">
                            <div class="input-group-btn dropdown" dropdown="">
                                <button type="button" class="btn btn-default" dropdown-toggle="">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Another action</a></li>
                                    <li><a href="">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-btn dropdown" dropdown="">
                                <button type="button" class="btn btn-default" dropdown-toggle="">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Another action</a></li>
                                    <li><a href="">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Segmented</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b">
                            <div class="input-group-btn dropdown" dropdown="">
                                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-default" dropdown-toggle=""><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Another action</a></li>
                                    <li><a href="">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-btn dropdown" dropdown="">
                                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-default" dropdown-toggle=""><span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Another action</a></li>
                                    <li><a href="">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div>
                    </div>
                </div>


                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Button radio</label>
                    <div class="col-sm-10">
                        <div class="btn-group m-r" ng-controller="ButtonsDemoCtrl">
                            <label class="btn btn-default" ng-model="radioModel" btn-radio="'Left'" uncheckable="">Left</label>
                            <label class="btn btn-default" ng-model="radioModel" btn-radio="'Middle'" uncheckable="">Middle</label>
                            <label class="btn btn-default" ng-model="radioModel" btn-radio="'Right'" uncheckable="">Right</label>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Button checkbox</label>
                    <div class="col-sm-10">
                        <div class="btn-group">
                            <label class="btn btn-default" ng-model="checkModel.left" btn-checkbox="">Left</label>
                            <label class="btn btn-default" ng-model="checkModel.middle" btn-checkbox="">Middle</label>
                            <label class="btn btn-default" ng-model="checkModel.right" btn-checkbox="">Right</label>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Slider</label>
                    <div class="col-sm-10">
                        <div class="slider slider-horizontal" style="width: 210px;"><div class="slider-track"><div class="slider-selection" style="left: 0%; width: 25%;"></div><div class="slider-handle round" style="left: 25%;"></div><div class="slider-handle round hide" style="left: 0%;"></div></div><div class="tooltip top" style="top: -30px; left: 41px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">5</div></div><input id="slider" ui-jq="slider" ui-options="{
              min: 0,
              max: 20,
              step: 1,
              value: 5
            }" class="slider slider-horizontal form-control" type="text" style="display: none;"></div> 5
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Vertical slider</label>
                    <div class="col-sm-10">
                        <div class="slider slider-vertical"><div class="slider-track"><div class="slider-selection" style="top: 0%; height: 40%;"></div><div class="slider-handle round" style="top: 40%;"></div><div class="slider-handle round hide" style="top: 0%;"></div></div><div class="tooltip right" style="left: 100%; top: 73px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">11</div></div><input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="11" data-slider-orientation="vertical" style="display: none;"></div>
                        <div class="slider slider-vertical"><div class="slider-track"><div class="slider-selection" style="top: 0%; height: 66.6667%;"></div><div class="slider-handle round" style="top: 66.6667%;"></div><div class="slider-handle round hide" style="top: 0%;"></div></div><div class="tooltip right" style="left: 100%; top: 129px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">15</div></div><input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="15" data-slider-orientation="vertical" style="display: none;"></div>
                        <div class="slider slider-vertical"><div class="slider-track"><div class="slider-selection" style="top: 0%; height: 46.6667%;"></div><div class="slider-handle round" style="top: 46.6667%;"></div><div class="slider-handle round hide" style="top: 0%;"></div></div><div class="tooltip right" style="left: 100%; top: 87px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">12</div></div><input ui-jq="slider" class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="12" data-slider-orientation="vertical" style="display: none;"></div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Range selector</label>
                    <div class="col-sm-10">
                        <div class="slider slider-horizontal" style="width: 210px;"><div class="slider-track"><div class="slider-selection" style="left: 24.2424%; width: 50.5051%;"></div><div class="slider-handle round" style="left: 24.2424%;"></div><div class="slider-handle round" style="left: 74.7475%;"></div></div><div class="tooltip top" style="top: -30px; left: 70.9394px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 750</div></div><input type="text" ui-jq="slider" class="slider form-control" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,750]" style="display: none;"></div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Spinner</label>
                    <div class="col-sm-10">
                        <div class="m-b">
                            <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix">$</span><input ui-jq="TouchSpin" type="text" value="0" class="form-control" data-min="0" data-max="10" data-step="0.1" data-decimals="2" data-prefix="$" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                        </div>
                        <div class="m-b">
                            <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input ui-jq="TouchSpin" type="text" value="5" class="form-control" data-min="0" data-max="10" data-step="0.1" data-decimals="2" data-postfix="%" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix">%</span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                        </div>
                        <div>
                            <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input ui-jq="TouchSpin" type="text" value="10" class="form-control" data-min="0" data-max="20" data-verticalbuttons="true" data-verticalupclass="fa fa-caret-up" data-verticaldownclass="fa fa-caret-down" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="fa fa-caret-up"></i></button><button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="fa fa-caret-down"></i></button></span></div>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Chosen</label>
                    <div class="col-sm-10">
                        <select ui-jq="chosen" class="w-md" style="display: none;">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select><div class="chosen-container chosen-container-single" style="width: 240px;" title=""><a class="chosen-single" tabindex="-1"><span>Alaska</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Chosen multiple</label>
                    <div class="col-sm-10">
                        <select ui-jq="chosen" multiple="" class="w-md" style="display: none;">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </select><div class="chosen-container chosen-container-multi" style="width: 240px;" title=""><ul class="chosen-choices"><li class="search-field"><input type="text" value="Select Some Options" class="default" autocomplete="off" style="width: 147px;"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tags input</label>
                    <div class="col-sm-10">
                        <input ui-jq="tagsinput" ui-options="" class="form-control w-md" style="display: none;"><div class="bootstrap-tagsinput"><input type="text" placeholder="" style="width: 3em !important;"></div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Datepicker</label>
                    <div class="col-sm-10" ng-controller="DatepickerDemoCtrl">
                        <div class="input-group w-md">
                            <input type="text" class="form-control" datepicker-popup="" ng-model="dt" is-open="opened" datepicker-options="dateOptions" ng-required="true" close-text="Close">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Date range picker</label>
                    <div class="col-sm-10">
                        <input ui-jq="daterangepicker" ui-options="{
                format: 'YYYY-MM-DD',
                startDate: '2013-01-01',
                endDate: '2013-12-31'
              }" class="form-control w-md">
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                        <input ui-jq="filestyle" type="file" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="filestyle-0" class="btn btn-default "><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>
                    </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Wysiwyg</label>
                    <div class="col-sm-10">
                        <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                            <div class="btn-group dropdown" dropdown="">
                                <a class="btn btn-default" dropdown-toggle="" tooltip="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li>
                                    <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li>
                                    <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li></ul>
                            </div>
                            <div class="btn-group dropdown" dropdown="">
                                <a class="btn btn-default" dropdown-toggle="" data-toggle="dropdown" tooltip="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a></li>
                                    <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a></li>
                                    <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default" data-edit="bold" tooltip="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                <a class="btn btn-default" data-edit="italic" tooltip="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                <a class="btn btn-default" data-edit="strikethrough" tooltip="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                <a class="btn btn-default" data-edit="underline" tooltip="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default" data-edit="insertunorderedlist" tooltip="Bullet list"><i class="fa fa-list-ul"></i></a>
                                <a class="btn btn-default" data-edit="insertorderedlist" tooltip="Number list"><i class="fa fa-list-ol"></i></a>
                                <a class="btn btn-default" data-edit="outdent" tooltip="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                <a class="btn btn-default" data-edit="indent" tooltip="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default" data-edit="justifyleft" tooltip="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                <a class="btn btn-default" data-edit="justifycenter" tooltip="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                <a class="btn btn-default" data-edit="justifyright" tooltip="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                <a class="btn btn-default" data-edit="justifyfull" tooltip="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                            </div>
                            <div class="btn-group dropdown" dropdown="">
                                <a class="btn btn-default" dropdown-toggle="" tooltip="Hyperlink"><i class="fa fa-link"></i></a>
                                <div class="dropdown-menu">
                                    <div class="input-group m-l-xs m-r-xs">
                                        <input class="form-control input-sm" id="LinkInput" placeholder="URL" type="text" data-edit="createLink">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default" type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-default" data-edit="unlink" tooltip="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn btn-default" tooltip="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default" data-edit="undo" tooltip="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                <a class="btn btn-default" data-edit="redo" tooltip="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                            </div>
                        </div>
                        <div ui-jq="wysiwyg" class="form-control" style="overflow:scroll;height:200px;max-height:200px" contenteditable="true">
                            Go ahead…
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection