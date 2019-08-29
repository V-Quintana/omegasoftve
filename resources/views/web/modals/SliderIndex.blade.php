<!--begin modal window-->
<div class="modal fade" id="MODAL">
        <div class="modal-dialog" style = "max-width: 820px !important;" >
            <div class="modal-content" style="background:#fff0; box-shadow: none;border: 0;border-radius: 40px;">
                <!--begin carousel-->
                <div id="GalleryIndex" class="carousel slide" data-interval="false" >
                    <div class="carousel-inner" >
                        <div class="item active"> <img src="{{ URL::to('/') }}/images/icons/S_1.png" alt="SERVICE_DESK">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/S_2.png" alt="SOFTWARE_ITSM">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/KB_1.png" alt="BASE_CONOCIMIENTO">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/KB_2.png" alt="SOFTWARE_KB">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/CMDB_1.png" alt="GESTION_ACTIVOS">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/CMDB_2.png" alt="SOFTWARE_CMDB">
                        </div>
                        <!--end carousel-inner-->
                    </div>
                    <!--Begin Previous and Next buttons-->
                    <a class="left carousel-control" href="#GalleryIndex" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#GalleryIndex" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <!--end carousel-->
                </div>
            <!--end modal-content-->
            </div>
        <!--end modal-dialoge-->
        </div>
        <!--end myModal-->
</div>