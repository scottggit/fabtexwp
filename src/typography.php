<?php
$page_title = "Typography | Below Invoice";
include('include/html_head.php');
include('include/navbar.php');
?>
<div class="container">
    <h1>h1 tag</h1>
    <h2>h2 tag</h2>
    <h3>h3 tag</h3>
    <h4>h4 tag</h4>
    <h5>h5 tag</h5>
    <h6>h6 tag</h6>

    <p class="display-1">Display 1</p>
    <p class="display-2">Display 2</p>
    <p class="display-3">Display 3</p>
    <p class="display-4">Display 4</p>
    <p class="display-5">Display 5</p>

    <p class="sub-hdr">Sub Header</p>
    <p class="text-long">Long 02</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, natus officia exercitationem adipisci nobis quis, consequatur atque pariatur saepe totam asperiores praesentium nulla? Dolorum libero, aut facilis labore id harum.</p>

    <p class="text-primary">Primary Text</p>
    <p class="text-secondary">Secondary Text</p>

    <p><small>Small Text</small></p>
    <p class="text-small">Small Text</p>
    <p class="text-smaller">Smaller Text</p>
    <p class="text-smallest">Smallest Text</p>
    <p><strong>Strong Text</strong></p>
    <p class="text-bold">Bold Class</p>

    <a href="#" class="btn">Button Default</a>
    <a href="#" class="btn btn-primary">Button Primary</a>
    <a href="#" class="btn btn-secondary">Button Secondary</a>
    <a href="#" class="btn btn-white">Button White</a>
    <a href="#" class="btn btn-white">Button White</a>
    <a href="#" class="btn btn-outline-primary">Button Outline</a>
    <a href="#" class="btn btn-outline-secondary">Button Outline</a>

    <form class="row">
        <div class="col-4 mb-3">
            <label for="exampleInputEmail1" class="form-label">Months at This Address *</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Text Placeholder">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-4 mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-4 mb-3">
            <select name="select" id="select" class="form-select">
                <option value="">Select Any</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
            </select>
        </div>
        <div class="col-12 mb-3">
            <div class="form-check form-check-inline">
                <input class="btn-check" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="btn-check" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Default checked radio
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('include/footer.php'); ?>
<?php include('include/footer_include_scripts.php'); ?>