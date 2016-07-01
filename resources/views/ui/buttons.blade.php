@extends('layout.ui')



@section('ui')

    <div class="container">


<div class="bs-docs-section">
    <h1 id="buttons" class="page-header">Buttons</h1>

    <h2 id="buttons-tags">Button tags</h2>
    <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
    <form class="bs-example" data-example-id="btn-tags">
        <a class="btn btn-default" href="#" role="button">Link</a>
        <button class="btn btn-default" type="submit">Button</button>
        <input class="btn btn-default" type="button" value="Input">
        <input class="btn btn-default" type="submit" value="Submit">
    </form>
    {% highlight html %}
    <a class="btn btn-default" href="#" role="button">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
    {% endhighlight %}

    <div class="bs-callout bs-callout-warning" id="callout-buttons-context-usage">
        <h4>Context-specific usage</h4>
        <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
    </div>

    <div class="bs-callout bs-callout-warning" id="callout-buttons-anchor-accessibility">
        <h4>Links acting as buttons</h4>
        <p>If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role="button"</code>.</p>
    </div>

    <div class="bs-callout bs-callout-warning" id="callout-buttons-ff-height">
        <h4>Cross-browser rendering</h4>
        <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
        <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a bug in Firefox &lt;30</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
    </div>

    <h2 id="buttons-options">Options</h2>
    <p>Use any of the available button classes to quickly create a styled button.</p>
    <div class="bs-example" data-example-id="btn-variants">
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
    </div>
    {% highlight html %}
    <!-- Standard button -->
    <button type="button" class="btn btn-default">Default</button>

    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <button type="button" class="btn btn-primary">Primary</button>

    <!-- Indicates a successful or positive action -->
    <button type="button" class="btn btn-success">Success</button>

    <!-- Contextual button for informational alert messages -->
    <button type="button" class="btn btn-info">Info</button>

    <!-- Indicates caution should be taken with this action -->
    <button type="button" class="btn btn-warning">Warning</button>

    <!-- Indicates a dangerous or potentially negative action -->
    <button type="button" class="btn btn-danger">Danger</button>

    <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
    <button type="button" class="btn btn-link">Link</button>
    {% endhighlight %}

    <div class="bs-callout bs-callout-warning" id="callout-buttons-color-accessibility">
        <h4>Conveying meaning to assistive technologies</h4>
        <p>Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
    </div>

    <h2 id="buttons-sizes">Sizes</h2>
    <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
    <div class="bs-example" data-example-id="btn-sizes">
        <p>
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            <button type="button" class="btn btn-default btn-lg">Large button</button>
        </p>
        <p>
            <button type="button" class="btn btn-primary">Default button</button>
            <button type="button" class="btn btn-default">Default button</button>
        </p>
        <p>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-default btn-sm">Small button</button>
        </p>
        <p>
            <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
            <button type="button" class="btn btn-default btn-xs">Extra small button</button>
        </p>
    </div>
    {% highlight html %}
    <p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
        <button type="button" class="btn btn-default btn-lg">Large button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary">Default button</button>
        <button type="button" class="btn btn-default">Default button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary btn-sm">Small button</button>
        <button type="button" class="btn btn-default btn-sm">Small button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
    </p>
    {% endhighlight %}

    <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
    <div class="bs-example" data-example-id="block-btns">
        <div class="well center-block" style="max-width: 400px;">
            <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
            <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
        </div>
    </div>
    {% highlight html %}
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
    {% endhighlight %}


    <h2 id="buttons-active">Active state</h2>
    <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the active state programmatically.</p>

    <h3>Button element</h3>
    <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
    <p class="bs-example" data-example-id="active-button-btns">
        <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
        <button type="button" class="btn btn-default btn-lg active">Button</button>
    </p>
    {% highlight html %}
    <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
    <button type="button" class="btn btn-default btn-lg active">Button</button>
    {% endhighlight %}

    <h3>Anchor element</h3>
    <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
    <p class="bs-example" data-example-id="active-anchor-btns">
        <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
        <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
    </p>
    {% highlight html %}
    <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
    {% endhighlight %}


    <h2 id="buttons-disabled">Disabled state</h2>
    <p>Make buttons look unclickable by fading them back with <code>opacity</code>.</p>

    <h3>Button element</h3>
    <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
    <p class="bs-example" data-example-id="disabled-button-btns">
        <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
        <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
    </p>
    {% highlight html %}
    <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
    {% endhighlight %}

    <div class="bs-callout bs-callout-danger" id="callout-buttons-ie-disabled">
        <h4>Cross-browser compatibility</h4>
        <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
    </div>

    <h3>Anchor element</h3>
    <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
    <p class="bs-example" data-example-id="disabled-anchor-btns">
        <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
        <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
    </p>
    {% highlight html %}
    <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
    {% endhighlight %}
    <p>
        We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
    </p>
    <div class="bs-callout bs-callout-warning" id="callout-buttons-disabled-anchor">
        <h4>Link functionality caveat</h4>
        <p>This class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, use custom JavaScript to disable such links.</p>
    </div>

</div>


        <div class="wrapper-md">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="m-t-xs">Button options</h4>
                    <div>
                        <button class="btn m-b-xs w-xs btn-default">Default</button>
                        <button class="btn m-b-xs w-xs btn-primary">Primary</button>
                        <button class="btn m-b-xs w-xs btn-success">Success</button>
                        <button class="btn m-b-xs w-xs btn-info">Info</button>
                        <button class="btn m-b-xs w-xs btn-warning">Warning</button>
                        <button class="btn m-b-xs w-xs btn-danger">Danger</button>
                        <button class="btn m-b-xs w-xs btn-dark">Dark</button>
                        <button class="btn m-b-xs w-xs btn-default disabled">Disabled</button>
                    </div>

                    <h4 class="m-t-lg">
                        Button addon
                    </h4>
                    <p>
                        <button class="btn m-b-xs btn-sm btn-primary btn-addon"><i class="fa fa-plus"></i>Primary</button>
                        <button class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-trash-o"></i>Info</button>
                        <button class="btn m-b-xs btn-sm btn-success btn-addon"><i class="fa fa-minus pull-right"></i>Success</button>
                        <button class="btn m-b-xs btn-sm btn-warning btn-addon"><i class="fa fa-circle"></i>Warning</button>
                        <button class="btn m-b-xs btn-sm btn-default btn-addon"><i class="fa fa-plus"></i>Default</button>
                    </p>
                    <p>
                        <button class="btn btn-default btn-addon"><i class="fa fa-music"></i>Default</button>
                        <button class="btn btn-info btn-addon"><i class="fa fa-play"></i>Info</button>
                    </p>

                    <h4 class="m-t">Button size</h4>
                    <p>
                        <button class="btn btn-default btn-lg">Large</button>
                        <button class="btn btn-primary btn-addon btn-lg"><i class="fa fa-plus"></i>Addon</button>
                    </p>
                    <p>
                        <button class="btn btn-default">Default button</button>
                    </p>
                    <p>
                        <button class="btn btn-default btn-sm">Small button</button>
                    </p>
                    <p>
                        <button class="btn btn-default btn-xs">Extra small button</button>
                    </p>

                    <h4 class="m-t-lg">Button dropdowns</h4>
                    <p class="text-muted">Single button dropdowns</p>
                    <div class="m-b-sm">
                        <div class="btn-group dropdown" dropdown="">
                            <button class="btn btn-default" dropdown-toggle="">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown" dropdown="">
                            <button class="btn btn-success" dropdown-toggle="">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-b-sm">
                        <div class="btn-group dropdown" dropdown="">
                            <button class="btn btn-default btn-sm" dropdown-toggle="">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-b-sm">
                        <div class="btn-group dropdown" dropdown="">
                            <button class="btn btn-default btn-xs" dropdown-toggle="">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted">Split button dropdowns &amp; variation </p>
                    <div class="m-b-sm">
                        <div class="btn-group dropdown" dropdown="">
                            <button class="btn btn-default">Action</button>
                            <button class="btn btn-default" dropdown-toggle=""><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown dropup" dropdown="">
                            <button class="btn btn-default">Action</button>
                            <button class="btn btn-default" dropdown-toggle=""><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="">Separated link</a></li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="m-t-lg">Button with icon</h4>
                    <p>
                        <button class="btn btn-default"><i class="fa fa-html5"></i> Html5</button>
                        <button class="btn btn-info"><i class="fa fa-css3"></i> CSS3</button>
                    </p>
                    <p>
                        <button class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</button>
                    </p>
                    <p>
                        <button class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> Block button with icon</button>
                    </p>
                    <h4 class="m-t-lg">
                        Button icon
                    </h4>
                    <p>
                        <button class="btn btn-sm btn-icon btn-info"><i class="fa fa-twitter"></i></button>
                        <button class="btn btn-sm btn-icon btn-danger"><i class="fa fa-google-plus"></i></button>
                    </p>
                    <h4 class="m-t-lg">
                        Button icon rounded
                    </h4>
                    <p>
                        <button class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-twitter"></i></button>
                        <button class="btn btn-rounded btn btn-icon btn-default"><i class="fa fa-facebook"></i></button>
                        <button class="btn btn-rounded btn-lg btn-icon btn-default"><i class="fa fa-google-plus"></i></button>
                    </p>
                </div>
                <div class="col-md-6">
                    <h4 class="m-t-xs">Rounded button</h4>
                    <div>
                        <button class="btn m-b-xs w-xs btn-default btn-rounded">Default</button>
                        <button class="btn m-b-xs w-xs btn-primary btn-rounded">Primary</button>
                        <button class="btn m-b-xs w-xs btn-success btn-rounded">Success</button>
                        <button class="btn m-b-xs w-xs btn-info btn-rounded">Info</button>
                        <button class="btn m-b-xs w-xs btn-warning btn-rounded">Warning</button>
                        <button class="btn m-b-xs w-xs btn-danger btn-rounded">Danger</button>
                        <button class="btn m-b-xs w-xs btn-dark btn-rounded">Dark</button>
                        <button class="btn m-b-xs w-xs btn-default btn-rounded disabled">Disabled</button>
                    </div>

                    <h4 class="m-t-lg">Button groups</h4>
                    <div class="m-b-sm">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                    </div>
                    <p class="text-muted">Vertical button groups</p>
                    <div class="btn-group-vertical m-b-sm">
                        <button type="button" class="btn btn-default">Top</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Bottom</button>
                    </div>
                    <p class="text-muted">Nested button groups</p>
                    <div class="btn-group m-b-sm">
                        <button type="button" class="btn btn-default">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <button type="button" class="btn btn-default">3</button>
                        <div class="btn-group dropdown" dropdown="">
                            <button type="button" class="btn btn-default" dropdown-toggle="">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Dropdown link</a></li>
                                <li><a href="">Dropdown link</a></li>
                                <li><a href="">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted">Justified button groups</p>
                    <div class="m-b-sm">
                        <div class="btn-group btn-group-justified">
                            <a href="" class="btn btn-primary">Left</a>
                            <a href="" class="btn btn-info">Middle</a>
                            <a href="" class="btn btn-success">Right</a>
                        </div>
                    </div>
                    <p class="text-muted">Multiple button groups</p>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">1</button>
                            <button type="button" class="btn btn-default active">2</button>
                            <button type="button" class="btn btn-default">3</button>
                            <button type="button" class="btn btn-default">4</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">5</button>
                            <button type="button" class="btn btn-default">6</button>
                            <button type="button" class="btn btn-default">7</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">8</button>
                        </div>
                    </div>

                    <h4 class="m-t-lg">Button components</h4>
                    <p class="text-muted">
                        <span>There are a few easy ways to quickly get started with Bootstrap, each one ...</span>
                        <span class="text-muted hide" id="moreless"> appealing to a different skill level and use case. Read through to see what suits your particular needs.</span>
                    </p>
                    <p>
                        <button class="btn btn-sm btn-default" ui-toggle-class="show" target="#moreless">
                            <i class="fa fa-plus text"></i>
                            <span class="text">More</span>
                            <i class="fa fa-minus text-active"></i>
                            <span class="text-active">Less</span>
                        </button>
                    </p>
                    <p>
                        <button class="btn btn-default" ui-toggle-class="btn-success">
                            <i class="fa fa-cloud-upload text"></i>
                            <span class="text">Upload</span>
                            <i class="fa fa-check text-active"></i>
                            <span class="text-active">Success</span>
                        </button>
                        <a class="btn btn-default" ui-toggle-class="button">
                            <i class="fa fa-heart-o text"></i>
                            <i class="fa fa-heart text-active text-danger"></i>
                        </a>
                        <a class="btn btn-default" ui-toggle-class="button">
          <span class="text">
            <i class="fa fa-thumbs-up text-success"></i> 25
          </span>
          <span class="text-active">
            <i class="fa fa-thumbs-down text-danger"></i> 10
          </span>
                        </a>
                        <button class="btn btn-success" ui-toggle-class="show inline" target="#spin">
                            <span class="text">Save</span>
                            <span class="text-active">Saving...</span>
                        </button>
                        <i class="fa fa-spin fa-spinner hide" id="spin"></i>
                    </p>
                    <div class="m-b-sm">
                        <div class="btn-group" ng-init="radioModel = 'Male'">
                            <label class="btn btn-sm btn-info" ng-model="radioModel" btn-radio="'Male'"><i class="fa fa-check text-active"></i> Male</label>
                            <label class="btn btn-sm btn-success" ng-model="radioModel" btn-radio="'Female'"><i class="fa fa-check text-active"></i> Female</label>
                            <label class="btn btn-sm btn-primary" ng-model="radioModel" btn-radio="'N/A'"><i class="fa fa-check text-active"></i> N/A</label>
                        </div>
                    </div>

                    <div class="m-b-sm">
                        <div class="btn-group" ng-init="checkModel = {option1: true, option2: false}">
                            <label class="btn btn-sm btn-default" ng-model="checkModel.option1" btn-checkbox="">Option1</label>
                            <label class="btn btn-sm btn-default" ng-model="checkModel.option3" btn-checkbox="">Option2</label>
                        </div>
                    </div>

                    <h4 class="m-t-lg">
                        <button class="pull-right text-sm btn btn-xs btn-default" ui-toggle-class="btn-rounded" target="#social-buttons button">Toggle</button>
                        Social buttons
                    </h4>
                    <p id="social-buttons">
                        <button class="btn btn-rounded btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i> Twitter</button>
                        <button class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</button>
                    </p>
                </div>
            </div>
        </div>


        </div>

 @endsection