@foreach ($guilds as $key => $guild)
    <div class="nk-modal modal fade show" id="guildModal{{ $key+1 }}" tabindex="-1" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" id="closeA{{ $key+1 }}" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>
                    <h4 class="mb-0">{!! $guild->title !!}</h4>
                    <div class="nk-gap-1"></div>
                    <div class="nk-modal-content">
                        <img id="img{{ $key+1 }}" style="max-width: 50%px;">
                        <div class="nk-gap-3"></div>
                        <p id="description">{!! $guild->description !!}</p>
                        
                        <div class="nk-gap-1"></div>

                        <div class="row vertical-gap">
                            @isset($guild->wowprogress)
                                <div class="col-lg-4">
                                    <div class="nk-feature-1">
                                        <div class="nk-feature-cont">
                                            <a href="{!! $guild->wowprogress !!}" target="_blank"
                                                class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">WoWProgress</a>
                                        </div>
                                    </div>
                                </div>  
                            @endisset
                            
                            <div class="col-lg-4">
                                @isset($guild->raiderio)
                                    <div class="nk-feature-1">
                                        <div class="nk-feature-cont">
                                            <a href="{!! $guild->raiderio !!}" target="_blank"
                                                class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">Raider.io</a>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            
                            <div class="col-lg-4">
                                @isset($guild->website)
                                    <div class="nk-feature-1">
                                        <div class="nk-feature-cont">
                                            <a href="{!! $guild->website !!}" target="_blank"
                                                class="nk-btn nk-btn-rounded nk-btn-color-dark-1 nk-btn-hover-color-main-1">Website</a>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    function displayModalA(key) {
        // Get the modal
        var modal = document.getElementById("guildModal" + key);
        var modalImg = document.getElementById("img" + key);
        var imgToInsert = document.getElementById("guildLogo" + key)

        // insert image into modal and display
        modalImg.src = imgToInsert.src
        modal.style.display = "block";
        modal.style.overflow="scroll"

         // Get the <span> element that closes the modal
        var span = document.getElementById("closeA" + key)

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
    }
</script>