<!--begin modal window-->
<div class="modal fade" id="MODAL">
        <div class="modal-dialog" style = "max-width: 820px !important;" >
            <div class="modal-content" style="background:#fff0; box-shadow: none;border: 0;border-radius: 40px;">
                <!--begin carousel-->
                <div id="GalleryCmdb" class="carousel slide" data-interval="false" >
                    <div class="carousel-inner" >
                        <div class="item active"> <img src="{{ URL::to('/') }}/images/icons/1_cmdb.png" alt="">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/2_cmdb.png" alt="">
                        </div>
                        <div class="item"> <img src="{{ URL::to('/') }}/images/icons/3_cmdb.png" alt="">
                        </div>
                        <!--end carousel-inner-->
                    </div>
                    <!--Begin Previous and Next buttons-->
                    <a class="left carousel-control" href="#GalleryCmdb" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#GalleryCmdb" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <!--end carousel-->
                </div>
            <!--end modal-content-->
            </div>
        <!--end modal-dialoge-->
        </div>
        <!--end myModal-->
</div>