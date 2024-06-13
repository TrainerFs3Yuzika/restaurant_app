@extends('layouts/layout_welcome');


@section('content')
<div class="container-xxl bg-white p-0">

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>2'Resto</h1>
                <!-- <img src="{{ asset('')}}frontend/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="#menu" class="nav-item nav-link">Menu</a>
                    <a href="{{ route('reservation') }}" class="nav-item nav-link">Reservation</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="nav-item dropdown ms-3">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-user"></i> User
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="nav-item nav-link active">{{ Auth::user()->name }}</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-shopping-cart"></i> Orders</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout')}}" class="dropdown-item">
                            <i class="fa fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').on('click', function () {
            $('.navbar-nav .nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
       
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-5 bg-dark hero-header mb-5">

    </div>
   

    <!-- Service Start -->
   
    <!-- Service End -->

 
    <!-- Menu Start -->
    <div class="container-xxl py-5" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Lunch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Classic Breakfast Platter.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Breakfast Platter ( 10% OFF )</span>
                                            <span class="text-primary">200k</span> 
                                        </h5>
                                        <small class="fst-italic">Telur Dadar, Roti Panggang, Sosis atau Bacon, Kentang Goreng, Dan Pilihan Buah-Buahan Segar</small>
                                        <button class="material-symbols-outlined"
                                        style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pancake Stack.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pancake Stack</span>
                                            <span class="text-primary">125k</span>
                                            </h5>
                                        <small class="fst-italic">Tumpukan pancake lembut dengan pilihan topping seperti madu, maple syrup, atau buah-buahan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Oatmeal Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Oatmeal Bowl</span>
                                            <span class="text-primary">90k</span>
                                        </h5>
                                        <small class="fst-italic"> Bubur oat dengan pilihan topping seperti buah-buahan, kacang-kacangan, atau madu.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Avocado Toast.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Avocado Toast</span>
                                            <span class="text-primary">125k</span>
                                        </h5>
                                        <small class="fst-italic">Roti gandum panggang dengan lapisan alpukat, telur mata sapi, dan taburan rempah.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Smoothie Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoothie Bowl</span>
                                            <span class="text-primary">95k</span>
                                        </h5>
                                        <small class="fst-italic">Smoothie dari campuran buah-buahan seperti pisang, mangga, dan beri, disajikan dalam mangkuk dengan topping granola, chia seed, dan irisan buah.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Yogurt Parfait.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Yogurt Parfait  ( 50% OFF )</span>
                                            <span class="text-primary">225k</span>
                                        </h5>
                                        <small class="fst-italic">Lapisan yogurt, granola, dan buah-buahan segar seperti beri, pisang, dan kiwi. Bisa juga ditambah dengan madu atau sirup maple untuk memberikan rasa manis alami.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/English Breakfast.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>English Breakfast</span>
                                            <span class="text-primary">199k</span>
                                        </h5>
                                        <small class="fst-italic">Sarapan lengkap ala Inggris yang terdiri dari telur (orak-arik atau mata sapi), sosis, bacon, jamur tumis, tomat panggang, kacang panggang, dan roti panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Crispy Bacon and Cheese Waffles.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Crispy Bacon and Cheese Waffles</span>
                                            <span class="text-primary">105k</span>
                                        </h5>
                                        <small class="fst-italic">variasi waffle yang gurih dan lezat. Waffle ini dibuat dengan adonan yang diberi tambahan potongan bacon renyah dan keju, sehingga menghasilkan kombinasi rasa yang kaya dan tekstur yang menarik.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Grilled Chicken Salad.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grilled Chicken Salad</span>
                                            <span class="text-primary">165k</span>
                                        </h5>
                                        <small class="fst-italic">Salad hijau dengan potongan ayam panggang, tomat, mentimun, wortel, dan dressing pilihan</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Classic Burger.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Burger</span>
                                            <span class="text-primary">55k</span>
                                        </h5>
                                        <small class="fst-italic">Burger daging sapi panggang dengan keju, selada, tomat, bawang, dan saus.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Vegetable Stir-fry.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetable Stir-fry</span>
                                            <span class="text-primary">85k</span>
                                        </h5>
                                        <small class="fst-italic">Tumis sayuran segar dengan pilihan saus seperti saus tiram atau saus kedelai.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Soup and Sandwich Combo.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Soup and Sandwich Combo</span>
                                            <span class="text-primary">95k</span>
                                        </h5>
                                        <small class="fst-italic">Pilihan sup harian dengan setengah sandwich (misalnya, sandwich ayam panggang atau tuna).</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Stuffed Bell Peppers.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Stuffed Bell Peppers ( 50% OFF )</span>
                                            <span class="text-primary">225k</span>
                                        </h5>
                                        <small class="fst-italic">Paprika yang diisi dengan campuran nasi, sayuran, dan kacang-kacangan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Margherita Pizza.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Margherita Pizza</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic">Pizza dengan tomat, mozzarella, dan basil.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Bento Box.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Bento Box</span>
                                            <span class="text-primary">165k</span>
                                        </h5>
                                        <small class="fst-italic">Kotak makan siang dengan berbagai hidangan seperti nasi, daging, dan sayuran.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pasta Carbonara.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pasta Carbonara</span>
                                            <span class="text-primary">125k</span>
                                        </h5>
                                        <small class="fst-italic">Pasta dengan saus krim, bacon, dan keju parmesan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Grilled Salmon Fillet.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grilled Salmon Fillet</span>
                                            <span class="text-primary">275k</span>
                                        </h5>
                                        <small class="fst-italic">Fillet salmon panggang dengan rempah-rempah, disajikan dengan pilihan sisi seperti nasi atau sayuran panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pasta Aglio e Olio.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pasta Aglio e Olio</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic">Pasta spaghetti dengan saus minyak zaitun, bawang putih, dan cabe, disajikan dengan parmesan parut.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Steak with Mashed Potatoes.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Steak with Mashed Potatoes</span>
                                            <span class="text-primary">270k</span>
                                        </h5>
                                        <small class="fst-italic">Steak sapi panggang dengan saus jus, disajikan dengan kentang tumbuk dan sayuran panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Vegetarian Buddha Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetarian Buddha Bowl</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic"></small> Mangkuk besar berisi nasi atau quinoa, sayuran panggang, kacang-kacangan, dan saus tahini.
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Duck Confit.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Duck Confit</span>
                                            <span class="text-primary">175k</span>
                                        </h5>
                                        <small class="fst-italic">Bebek yang dimasak perlahan dalam lemaknya sendiri hingga dagingnya sangat empuk, disajikan dengan kentang goreng dan salad hijau.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Lamb Chops.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lamb Chops</span>
                                            <span class="text-primary">250k</span>
                                        </h5>
                                        <small class="fst-italic">Potongan daging domba yang dipanggang hingga empuk, biasanya disajikan dengan saus rosemary atau mint, dan dilengkapi dengan sayuran musiman serta kentang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Risotto.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Risotto</span>
                                            <span class="text-primary">125k</span>
                                          </h5>
                                        <small class="fst-italic">Nasi Italia yang dimasak dengan kaldu hingga creamy, seringkali ditambahkan dengan bahan-bahan seperti jamur, udang, atau asparagus, serta keju parmesan untuk rasa yang kaya.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Seafood Paella.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Seafood Paella</span>
                                            <span class="text-primary">245k</span>
                                        </h5>
                                        <small class="fst-italic">Hidangan nasi Spanyol yang dimasak dengan saffron, kaldu, dan berbagai jenis seafood seperti udang, kerang, dan cumi. Dilengkapi dengan paprika dan kacang polong.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    


    <div class="container-xxl py-5" id="contact">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Hubungi Kami</h5>
                <h1 class="mb-5">Hubungi Untuk Pertanyaan apa pun</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.64697269567!2d107.56021812897278!3d-6.903132601314176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7be50d4d701%3A0x52ea69a2efc7d37f!2sKota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1717387300887!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">No WhatsApp</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Reservation</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Jakarta, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Gamelab.id</a> 
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection