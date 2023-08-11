<!-- banner-section -->

{{--@dd($confPrincipalImage)--}}
<section class="banner-section"
         style="background-image: url({{ (!empty($confPrincipalImage->value)) ? url('upload/configuration/principal_image/' .  $confPrincipalImage->value) : url('upload/No_Image_Available.jpg') }});">
    <div class="auto-container">
        <div class="inner-container">
            <div class="content-box centred">
                <h2>ProPropiedades</h2>
                <p>Un paso mas cerca al lugar que te mereces.</p>
            </div>
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">COMPRA</li>
                            <li class="tab-btn" data-tab="#tab-2">ALQUILER</li>
                            <li class="tab-btn" data-tab="#tab-3">ANTICRETICO</li>
                            <li class="tab-btn" data-tab="#tab-4">PROYECTO</li>
                        </ul>
                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <x-search-card type="Venta" :cities="$cities" :propertyTypes="$propertyTypes" :agents="$agents"  />
                        </div>
                        <div class="tab" id="tab-2">
                            <x-search-card type="Alquiler" :cities="$cities" :propertyTypes="$propertyTypes" :agents="$agents" />
                        </div>

                        <div class="tab" id="tab-3">
                            <x-search-card type="Anticretico" :cities="$cities" :propertyTypes="$propertyTypes" :agents="$agents" />
                        </div>

                        <div class="tab" id="tab-4">
                            <x-search-card type="Proyecto" :cities="$cities" :propertyTypes="$propertyTypes" :agents="$agents" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
