@extends('layouts.app')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="https://httpbin.org/post" method="post" class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form elements</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Static</label>
                                    <div class="form-control-plaintext">Username</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <input type="text" class="form-control" name="example-text-input" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Disabled</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, she turned me into a newt." disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Readonly</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, how'd you become king, then?" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Textarea <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content..">Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image Check</label>
                                    <div class="row gutters-sm">
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/nathan-anderson-316188-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input"  checked />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/nathan-dumlao-287713-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/nicolas-picard-208276-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input"  checked />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/oskar-vertetics-53043-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/priscilla-du-preez-181896-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/ricardo-gomez-angel-262359-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="7" class="imagecheck-input"  checked />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/sam-ferrara-136526-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="8" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/sean-afnan-244576-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="9" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="./demo/photos/sophie-higginbottom-133982-500.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Color Input</label>
                                    <div class="row gutters-xs">
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="azure" class="colorinput-input" />
                                                <span class="colorinput-color bg-azure"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="indigo" class="colorinput-input"  checked/>
                                                <span class="colorinput-color bg-indigo"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="purple" class="colorinput-input" />
                                                <span class="colorinput-color bg-purple"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="pink" class="colorinput-input" />
                                                <span class="colorinput-color bg-pink"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="red" class="colorinput-input" />
                                                <span class="colorinput-color bg-red"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="orange" class="colorinput-input" />
                                                <span class="colorinput-color bg-orange"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="yellow" class="colorinput-input" />
                                                <span class="colorinput-color bg-yellow"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="lime" class="colorinput-input" />
                                                <span class="colorinput-color bg-lime"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="green" class="colorinput-input" />
                                                <span class="colorinput-color bg-green"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                                <input name="color" type="checkbox" value="teal" class="colorinput-input" />
                                                <span class="colorinput-color bg-teal"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Input group</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Input group buttons</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary">Action</button>
                                            <button data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle"></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">News</a>
                                                <a class="dropdown-item" href="#">Messages</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Edit Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Icon input</label>
                                    <div class="input-icon mb-3">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-icon-addon">
                                            <i class="fe fe-search"></i>
                                        </span>
                                    </div>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fe fe-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Separated inputs</label>
                                    <div class="row gutters-xs">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                        </div>
                                        <span class="col-auto">
                                            <button class="btn btn-secondary" type="button"><i class="fe fe-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ZIP Code</label>
                                    <div class="row gutters-sm">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                        </div>
                                        <span class="col-auto align-self-center">
                                            <span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p><p class='mb-0'><a href=''>USP ZIP codes lookup tools</a></p>">?</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="example-password-input" placeholder="Password..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Valid State</label>
                                    <input type="text" class="form-control is-valid" name="example-text-input-valid" placeholder="Valid State..">
                                    <input type="text" class="form-control mt-3 state-valid" value="Valid state">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Invalid State</label>
                                    <input type="text" class="form-control is-invalid" name="example-text-input-invalid" placeholder="Invalid State..">
                                    <div class="invalid-feedback">Invalid feedback</div>
                                    <input type="text" class="form-control mt-3 state-invalid" value="Invalid state">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-control custom-select">
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ratios</label>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <input type="range" class="form-control custom-range" step="5" min="0" max="50">
                                        </div>
                                        <div class="col-auto">
                                            <input type="number" class="form-control w-8" value="45">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Size</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">S</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">M</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                            <span class="selectgroup-button">L</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                            <span class="selectgroup-button">XL</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Icons input</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-smartphone"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="1" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-tablet"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-monitor"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-x"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Icon input</label>
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-sun"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-moon"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="3" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-cloud-rain"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="4" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fe fe-cloud"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Your skills</label>
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">HTML</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                            <span class="selectgroup-button">CSS</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                            <span class="selectgroup-button">PHP</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                            <span class="selectgroup-button">JavaScript</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                            <span class="selectgroup-button">C++</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Toggle switches</div>
                                    <div class="custom-switches-stacked">
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 1</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="2" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 2</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="3" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Toggle switch single</div>
                                    <label class="custom-switch">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">I agree with terms and conditions</span>
                                    </label>
                                </div>
                                <fieldset class="form-fieldset">
                                    <div class="form-group">
                                        <label class="form-label">Full name<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Company<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email<span class="form-required">*</span></label>
                                        <input type="email" class="form-control" />
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone number</label>
                                        <input type="tel" class="form-control" />
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="form-label">Radios</div>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                            <div class="custom-control-label">Option 1</div>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                            <div class="custom-control-label">Option 2</div>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled>
                                            <div class="custom-control-label">Option Disabled</div>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios2" value="option4" disabled checked>
                                            <div class="custom-control-label">Option Disabled Checked</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Inline Radios</div>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" name="example-inline-radios" value="option1" checked>
                                            <span class="custom-control-label">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" name="example-inline-radios" value="option2">
                                            <span class="custom-control-label">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" name="example-inline-radios" value="option3">
                                            <span class="custom-control-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Checkboxes</div>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                            <span class="custom-control-label">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
                                            <span class="custom-control-label">Option Disabled</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
                                            <span class="custom-control-label">Option Disabled Checked</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Inline Checkboxes</div>
                                    <div>
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" name="example-inline-checkbox1" value="option1" checked>
                                            <span class="custom-control-label">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" name="example-inline-checkbox2" value="option2">
                                            <span class="custom-control-label">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" name="example-inline-checkbox3" value="option3">
                                            <span class="custom-control-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Bootstrap's Custom File Input</div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="example-file-input-custom">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date of birth</label>
                                    <div class="row gutters-xs">
                                        <div class="col-5">
                                            <select name="user[month]" class="form-control custom-select">
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option selected="selected" value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <select name="user[day]" class="form-control custom-select">
                                                <option value="">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option selected="selected" value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="user[year]" class="form-control custom-select">
                                                <option value="">Year</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option selected="selected" value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                                <option value="1903">1903</option>
                                                <option value="1902">1902</option>
                                                <option value="1901">1901</option>
                                                <option value="1900">1900</option>
                                                <option value="1899">1899</option>
                                                <option value="1898">1898</option>
                                                <option value="1897">1897</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon1">
                                            <span class="input-group-text">@</span>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Subdomain</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your subdomain" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-append" id="basic-addon2">
                                            <span class="input-group-text">.example.com</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Your vanity URL</label>
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon3">
                                            <span class="input-group-text">https://example.com/users/</span>
                                        </span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </span>
                                        <input type="text" class="form-control text-right" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Button input</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="input-tags" value="aa,bb,cc,dd">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Beast</label>
                                    <select name="beast" id="select-beast" class="form-control custom-select">
                                        <option value="1">Chuck Testa</option>
                                        <option value="4">Sage Cattabriga-Alosa</option>
                                        <option value="3">Nikola Tesla</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Users list</label>
                                    <select name="user" id="select-users" class="form-control custom-select">
                                        <option value="1" data-data='{"image": "demo/faces/female/16.jpg"}'>Victoria King</option>
                                        <option value="2" data-data='{"image": "demo/faces/male/41.jpg"}'>Nathan Guerrero</option>
                                        <option value="3" data-data='{"image": "demo/faces/female/1.jpg"}'>Alice Mason</option>
                                        <option value="4" data-data='{"image": "demo/faces/female/18.jpg"}'>Rose Bradley</option>
                                        <option value="5" data-data='{"image": "demo/faces/male/16.jpg"}'>Peter Richards</option>
                                        <option value="6" data-data='{"image": "demo/faces/male/26.jpg"}'>Wayne Holland</option>
                                        <option value="7" data-data='{"image": "demo/faces/female/7.jpg"}'>Michelle Ross</option>
                                        <option value="8" data-data='{"image": "demo/faces/female/17.jpg"}'>Debra Beck</option>
                                        <option value="9" data-data='{"image": "demo/faces/male/30.jpg"}'>Phillip Peters</option>
                                        <option value="10" data-data='{"image": "demo/faces/male/32.jpg"}'>Jack Ruiz</option>
                                        <option value="11" data-data='{"image": "demo/faces/male/9.jpg"}'>Ronald Bradley</option>
                                        <option value="12" data-data='{"image": "demo/faces/female/8.jpg"}'>Kathleen Harper</option>
                                        <option value="13" data-data='{"image": "demo/faces/male/4.jpg"}'>Bobby Knight</option>
                                        <option value="14" data-data='{"image": "demo/faces/male/35.jpg"}'>Craig Anderson</option>
                                        <option value="15" data-data='{"image": "demo/faces/female/29.jpg"}'>Crystal Wallace</option>
                                        <option value="16" data-data='{"image": "demo/faces/male/2.jpg"}'>Vincent Valdez</option>
                                        <option value="17" data-data='{"image": "demo/faces/female/1.jpg"}'>Beverly Armstrong</option>
                                        <option value="18" data-data='{"image": "demo/faces/male/40.jpg"}'>Russell Gibson</option>
                                        <option value="19" data-data='{"image": "demo/faces/male/7.jpg"}'>Tyler Munoz</option>
                                        <option value="20" data-data='{"image": "demo/faces/female/11.jpg"}'>Sharon Wells</option>
                                        <option value="21" data-data='{"image": "demo/faces/male/21.jpg"}'>Juan Hernandez</option>
                                        <option value="22" data-data='{"image": "demo/faces/male/25.jpg"}'>Dylan Walters</option>
                                        <option value="23" data-data='{"image": "demo/faces/female/5.jpg"}'>Kathryn Cooper</option>
                                        <option value="24" data-data='{"image": "demo/faces/female/17.jpg"}'>Cynthia Curtis</option>
                                        <option value="25" data-data='{"image": "demo/faces/male/40.jpg"}'>Michael Obrien</option>
                                        <option value="26" data-data='{"image": "demo/faces/male/33.jpg"}'>Billy May</option>
                                        <option value="27" data-data='{"image": "demo/faces/male/6.jpg"}'>Larry Jensen</option>
                                        <option value="28" data-data='{"image": "demo/faces/male/32.jpg"}'>Terry Barnett</option>
                                        <option value="29" data-data='{"image": "demo/faces/female/10.jpg"}'>Ruth Arnold</option>
                                        <option value="30" data-data='{"image": "demo/faces/female/18.jpg"}'>Julia Reed</option>
                                        <option value="31" data-data='{"image": "demo/faces/female/12.jpg"}'>Amanda Hunt</option>
                                        <option value="32" data-data='{"image": "demo/faces/female/21.jpg"}'>Laura Weaver</option>
                                        <option value="33" data-data='{"image": "demo/faces/female/29.jpg"}'>Margaret Berry</option>
                                        <option value="34" data-data='{"image": "demo/faces/female/2.jpg"}'>Nancy Herrera</option>
                                        <option value="35" data-data='{"image": "demo/faces/male/34.jpg"}'>Edward Larson</option>
                                        <option value="36" data-data='{"image": "demo/faces/female/11.jpg"}'>Joan Hanson</option>
                                        <option value="37" data-data='{"image": "demo/faces/female/30.jpg"}'>Janet Reed</option>
                                        <option value="38" data-data='{"image": "demo/faces/male/31.jpg"}'>Johnny Barnett</option>
                                        <option value="39" data-data='{"image": "demo/faces/male/42.jpg"}'>Ethan Griffin</option>
                                        <option value="40" data-data='{"image": "demo/faces/male/2.jpg"}'>Albert Torres</option>
                                        <option value="41" data-data='{"image": "demo/faces/female/25.jpg"}'>Jane Pearson</option>
                                        <option value="42" data-data='{"image": "demo/faces/male/9.jpg"}'>Jason Porter</option>
                                        <option value="43" data-data='{"image": "demo/faces/female/25.jpg"}'>Teresa Wood</option>
                                        <option value="44" data-data='{"image": "demo/faces/female/16.jpg"}'>Mary Butler</option>
                                        <option value="45" data-data='{"image": "demo/faces/female/27.jpg"}'>Janice Lane</option>
                                        <option value="46" data-data='{"image": "demo/faces/male/26.jpg"}'>Anthony Miller</option>
                                        <option value="47" data-data='{"image": "demo/faces/female/9.jpg"}'>Denise Elliott</option>
                                        <option value="48" data-data='{"image": "demo/faces/female/16.jpg"}'>Rose Cook</option>
                                        <option value="49" data-data='{"image": "demo/faces/male/17.jpg"}'>Terry Tucker</option>
                                        <option value="50" data-data='{"image": "demo/faces/female/6.jpg"}'>Grace Knight</option>
                                        <option value="51" data-data='{"image": "demo/faces/female/26.jpg"}'>Elizabeth Martin</option>
                                        <option value="52" data-data='{"image": "demo/faces/female/17.jpg"}'>Michelle Schultz</option>
                                        <option value="53" data-data='{"image": "demo/faces/female/21.jpg"}'>Crystal Austin</option>
                                        <option value="54" data-data='{"image": "demo/faces/male/32.jpg"}'>Douglas Ray</option>
                                        <option value="55" data-data='{"image": "demo/faces/female/12.jpg"}'>Teresa Reyes</option>
                                        <option value="56" data-data='{"image": "demo/faces/female/4.jpg"}'>Emma Wade</option>
                                        <option value="57" data-data='{"image": "demo/faces/female/27.jpg"}'>Carol Henderson</option>
                                        <option value="58" data-data='{"image": "demo/faces/male/20.jpg"}'>Christopher Harvey</option>
                                        <option value="59" data-data='{"image": "demo/faces/female/5.jpg"}'>Deborah Alvarado</option>
                                        <option value="60" data-data='{"image": "demo/faces/male/10.jpg"}'>Gregory Hunt</option>
                                        <option value="61" data-data='{"image": "demo/faces/male/14.jpg"}'>Jesse Carlson</option>
                                        <option value="62" data-data='{"image": "demo/faces/female/22.jpg"}'>Joan Wood</option>
                                        <option value="63" data-data='{"image": "demo/faces/male/20.jpg"}'>Carl Alvarado</option>
                                        <option value="64" data-data='{"image": "demo/faces/male/40.jpg"}'>Frank George</option>
                                        <option value="65" data-data='{"image": "demo/faces/female/17.jpg"}'>Kathleen Greene</option>
                                        <option value="66" data-data='{"image": "demo/faces/female/6.jpg"}'>Michelle Gray</option>
                                        <option value="67" data-data='{"image": "demo/faces/female/5.jpg"}'>Nancy Hawkins</option>
                                        <option value="68" data-data='{"image": "demo/faces/male/1.jpg"}'>Tyler Fisher</option>
                                        <option value="69" data-data='{"image": "demo/faces/male/5.jpg"}'>Jordan Cunningham</option>
                                        <option value="70" data-data='{"image": "demo/faces/male/27.jpg"}'>Wayne Reynolds</option>
                                        <option value="71" data-data='{"image": "demo/faces/male/10.jpg"}'>Johnny Carlson</option>
                                        <option value="72" data-data='{"image": "demo/faces/male/31.jpg"}'>Tyler Washington</option>
                                        <option value="73" data-data='{"image": "demo/faces/female/18.jpg"}'>Debra Alvarado</option>
                                        <option value="74" data-data='{"image": "demo/faces/female/21.jpg"}'>Beverly Brewer</option>
                                        <option value="75" data-data='{"image": "demo/faces/male/42.jpg"}'>Sean Gilbert</option>
                                        <option value="76" data-data='{"image": "demo/faces/female/32.jpg"}'>Diane McCoy</option>
                                        <option value="77" data-data='{"image": "demo/faces/male/35.jpg"}'>Robert Newman</option>
                                        <option value="78" data-data='{"image": "demo/faces/female/26.jpg"}'>Olivia Newman</option>
                                        <option value="79" data-data='{"image": "demo/faces/female/18.jpg"}'>Lori George</option>
                                        <option value="80" data-data='{"image": "demo/faces/female/13.jpg"}'>Madison Jimenez</option>
                                        <option value="81" data-data='{"image": "demo/faces/female/4.jpg"}'>Joan Rivera</option>
                                        <option value="82" data-data='{"image": "demo/faces/female/27.jpg"}'>Helen Aguilar</option>
                                        <option value="83" data-data='{"image": "demo/faces/male/40.jpg"}'>Bryan Johnson</option>
                                        <option value="84" data-data='{"image": "demo/faces/female/27.jpg"}'>Joan Beck</option>
                                        <option value="85" data-data='{"image": "demo/faces/male/33.jpg"}'>Douglas James</option>
                                        <option value="86" data-data='{"image": "demo/faces/male/24.jpg"}'>Ethan Bell</option>
                                        <option value="87" data-data='{"image": "demo/faces/female/18.jpg"}'>Frances White</option>
                                        <option value="88" data-data='{"image": "demo/faces/female/26.jpg"}'>Amanda Lawrence</option>
                                        <option value="89" data-data='{"image": "demo/faces/female/7.jpg"}'>Emma Bailey</option>
                                        <option value="90" data-data='{"image": "demo/faces/female/16.jpg"}'>Anna Jordan</option>
                                        <option value="91" data-data='{"image": "demo/faces/male/12.jpg"}'>Daniel Keller</option>
                                        <option value="92" data-data='{"image": "demo/faces/female/23.jpg"}'>Rachel Vargas</option>
                                        <option value="93" data-data='{"image": "demo/faces/female/15.jpg"}'>Virginia Kelly</option>
                                        <option value="94" data-data='{"image": "demo/faces/male/32.jpg"}'>Joe Sandoval</option>
                                        <option value="95" data-data='{"image": "demo/faces/female/9.jpg"}'>Megan Ray</option>
                                        <option value="96" data-data='{"image": "demo/faces/male/28.jpg"}'>Joshua Rios</option>
                                        <option value="97" data-data='{"image": "demo/faces/male/9.jpg"}'>Aaron Silva</option>
                                        <option value="98" data-data='{"image": "demo/faces/female/10.jpg"}'>Kathy Wallace</option>
                                        <option value="99" data-data='{"image": "demo/faces/male/14.jpg"}'>Zachary Griffin</option>
                                        <option value="100" data-data='{"image": "demo/faces/male/11.jpg"}'>Richard Allen</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Countries</label>
                                    <select name="country" id="select-countries" class="form-control custom-select">
                                        <option value="br" data-data='{"image": "./images/vendor/tabler-ui/src/flags/br.svg"}'>Brazil</option>
                                        <option value="cz" data-data='{"image": "./images/vendor/tabler-ui/src/flags/cz.svg"}'>Czech Republic</option>
                                        <option value="de" data-data='{"image": "./images/vendor/tabler-ui/src/flags/de.svg"}'>Germany</option>
                                        <option value="pl" data-data='{"image": "./images/vendor/tabler-ui/src/flags/pl.svg"}' selected>Poland</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="#" class="btn btn-link">Cancel</a>
                            <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                        </div>
                    </div>
                </form>
                <script>
                    $(document).ready(function () {
                        $('#input-tags').selectize({
                            delimiter: ',',
                            persist: false,
                            create: function (input) {
                                return {
                                    value: input,
                                    text: input
                                }
                            }
                        });

                        $('#select-beast').selectize({});

                        $('#select-users').selectize({
                            render: {
                                option: function (data, escape) {
                                return '<div>' +
                                    '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                    '<span class="title">' + escape(data.text) + '</span>' +
                                    '</div>';
                                },
                                item: function (data, escape) {
                                    return '<div>' +
                                    '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                    escape(data.text) +
                                    '</div>';
                                }
                            }
                        });

                        $('#select-countries').selectize({
                            render: {
                                option: function (data, escape) {
                                    return '<div>' +
                                    '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                    '<span class="title">' + escape(data.text) + '</span>' +
                                    '</div>';
                                },
                                item: function (data, escape) {
                                    return '<div>' +
                                    '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                    escape(data.text) +
                                    '</div>';
                                }
                            }
                        });
                    });
                </script>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Input mask</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input type="text" name="field-name" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hour</label>
                            <input type="text" name="field-name" class="form-control" data-mask="00:00:00" data-mask-clearifnotmatch="true" placeholder="00:00:00" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date & Hour</label>
                            <input type="text" name="field-name" class="form-control" data-mask="00/00/0000 00:00:00" data-mask-clearifnotmatch="true" placeholder="00/00/0000 00:00:00" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">ZIP Code</label>
                            <input type="text" name="field-name" class="form-control" data-mask="00000-000" data-mask-clearifnotmatch="true" placeholder="00000-000" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Money</label>
                            <input type="text" name="field-name" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telephone</label>
                            <input type="text" name="field-name" class="form-control" data-mask="0000-0000" data-mask-clearifnotmatch="true" placeholder="0000-0000" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telephone with Code Area</label>
                            <input type="text" name="field-name" class="form-control" data-mask="(00) 0000-0000" data-mask-clearifnotmatch="true" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">IP Address</label>
                            <input type="text" name="field-name" class="form-control" data-mask="099.099.099.099" data-mask-clearifnotmatch="true" placeholder="000.000.000.000" />
                        </div>
                    </div>
                </div>
            <script>
            // require(['input-mask']);
            </script>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url(demo/faces/female/9.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" placeholder="your-email@domain.com"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" placeholder="your-email@domain.com"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" value="password"/>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Profile</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" value="Chet">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-control custom-select">
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">About Me</label>
                                    <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
                                    You doubt I'll bother, reading into it
                                    I'll probably won't, left to my own devices
                                    But that's the difference in our opinions.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">HTTP Request</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-4 col-md-2">
                                <label class="form-label">
                                    Method <span class="form-required">*</span>
                                </label>
                                <select class="custom-select">
                                    <option value="GET">GET</option>
                                    <option value="POST">POST</option>
                                    <option value="PUT">PUT</option>
                                    <option value="HEAD">HEAD</option>
                                    <option value="DELETE">DELETE</option>
                                    <option value="PATCH">PATCH</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-8 col-md-10">
                                <label class="form-label">
                                    URL <span class="form-required">*</span>
                                </label>
                                <input name="url" type="text" class="form-control" value="https://content.googleapis.com/discovery/v1/apis/surveys/v2/rest">
                            </div>
                        </div>
                        <div class="form-label">Assertions</div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="pl-0">Source</th>
                                        <th>Property</th>
                                        <th>Comparison</th>
                                        <th class="pr-0">Target</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td class="pl-0">
                                        <select class="custom-select">
                                            <option value="STATUS_CODE" selected>Status code</option>
                                            <option value="JSON_BODY">JSON body</option>
                                            <option value="HEADERS">Headers</option>
                                            <option value="TEXT_BODY">Text body</option>
                                            <option value="RESPONSE_TIME">Response time</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="EQUALS" selected>Equals</option>
                                            <option value="NOT_EQUALS">Not equals</option>
                                            <option value="HAS_KEY">Has key</option>
                                            <option value="NOT_HAS_KEY">Not has key</option>
                                            <option value="HAS_VALUE">Has value</option>
                                            <option value="NOT_HAS_VALUE">Not has value</option>
                                            <option value="IS_EMPTY">Is empty</option>
                                            <option value="NOT_EMPTY">Is not empty</option>
                                            <option value="GREATER_THAN">Greater than</option>
                                            <option value="LESS_THAN">Less than</option>
                                        </select>
                                    </td>
                                    <td class="pr-0">
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <select class="custom-select">
                                            <option value="STATUS_CODE">Status code</option>
                                            <option value="JSON_BODY" selected>JSON body</option>
                                            <option value="HEADERS">Headers</option>
                                            <option value="TEXT_BODY">Text body</option>
                                            <option value="RESPONSE_TIME">Response time</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="parameters.alt.type">
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="EQUALS">Equals</option>
                                            <option value="NOT_EQUALS">Not equals</option>
                                            <option value="HAS_KEY">Has key</option>
                                            <option value="NOT_HAS_KEY">Not has key</option>
                                            <option value="HAS_VALUE" selected>Has value</option>
                                            <option value="NOT_HAS_VALUE">Not has value</option>
                                            <option value="IS_EMPTY">Is empty</option>
                                            <option value="NOT_EMPTY">Is not empty</option>
                                            <option value="GREATER_THAN">Greater than</option>
                                            <option value="LESS_THAN">Less than</option>
                                        </select>
                                    </td>
                                    <td class="pr-0">
                                        <input type="text" class="form-control" value="string">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <select class="custom-select">
                                            <option value="STATUS_CODE">Status code</option>
                                            <option value="JSON_BODY">JSON body</option>
                                            <option value="HEADERS">Headers</option>
                                            <option value="TEXT_BODY">Text body</option>
                                            <option value="RESPONSE_TIME" selected>Response time</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="EQUALS">Equals</option>
                                            <option value="NOT_EQUALS">Not equals</option>
                                            <option value="HAS_KEY">Has key</option>
                                            <option value="NOT_HAS_KEY">Not has key</option>
                                            <option value="HAS_VALUE">Has value</option>
                                            <option value="NOT_HAS_VALUE">Not has value</option>
                                            <option value="IS_EMPTY">Is empty</option>
                                            <option value="NOT_EMPTY">Is not empty</option>
                                            <option value="GREATER_THAN">Greater than</option>
                                            <option value="LESS_THAN" selected>Less than</option>
                                        </select>
                                    </td>
                                    <td class="pr-0">
                                        <input type="text" class="form-control" value="500">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <select class="custom-select">
                                            <option value="STATUS_CODE">Status code</option>
                                            <option value="JSON_BODY">JSON body</option>
                                            <option value="HEADERS" selected>Headers</option>
                                            <option value="TEXT_BODY">Text body</option>
                                            <option value="RESPONSE_TIME">Response time</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="content-type">
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="EQUALS" selected>Equals</option>
                                            <option value="NOT_EQUALS">Not equals</option>
                                            <option value="HAS_KEY">Has key</option>
                                            <option value="NOT_HAS_KEY">Not has key</option>
                                            <option value="HAS_VALUE">Has value</option>
                                            <option value="NOT_HAS_VALUE">Not has value</option>
                                            <option value="IS_EMPTY">Is empty</option>
                                            <option value="NOT_EMPTY">Is not empty</option>
                                            <option value="GREATER_THAN">Greater than</option>
                                            <option value="LESS_THAN">Less than</option>
                                        </select>
                                    </td>
                                    <td class="pr-0">
                                        <input type="text" class="form-control" value="application/json; charset=UTF-8">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Make request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection