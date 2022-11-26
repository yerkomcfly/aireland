<!-- Button trigger modal -->
<button href="#" class=" boton2  position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['id'];?>">
                                        <h6 class="montserrat text-white text-center bold-5 pt-2 center-text border-0">Ver más +</h6>
                                    </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nombre']?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <a href="./producto.php?id=<?php echo $row['id'];?>&&color=negro" type="submit">
                        <label id="input-radio1" for="" class="input-negro"></label>
                        </a>