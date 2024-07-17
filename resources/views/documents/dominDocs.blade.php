@extends('layouts.storelayout')

@section('title', 'Dcuments')

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/documents.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
@endsection
@section('content')
    <div class="mt-5 pt-5">
        <!-- start button scroll to top -->

        <button class="scroll-top" id="scrollToTopBtn">
            <i class="bi bi-arrow-up"></i>
        </button>

        <!-- end button scroll to top -->



        <!-- start allDocuments page head -->

        <div class="allDocuments-head page-head pt-2">
            <div class="container">
                <div class="page-head-wrapper">
                    <h2 class="page-head-title">nom domaine</h2>
                    <div class="serach-upload">
                        <div class="search">
                            <form class="form-search">
                                <input class="form-control" type="search" placeholder="Recherche..." aria-label="Search">
                                <button class="btn btn-search" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                        <a href="" class="upload-link">
                            <i class="bi bi-upload"></i>
                            <span>importer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end documents page head -->



        <!-- start section : all-documents -->

        <section class="all-documents">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="{{route('docs.show')}}" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share" data-bs-toggle="tooltip"
                                        data-bs-placement="top"data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Partager">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download" data-bs-toggle="tooltip"
                                        data-bs-placement="top"data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Télécharger">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print" data-bs-toggle="tooltip"
                                        data-bs-placement="top"data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Imprimer">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link" data-bs-toggle="tooltip"
                                    data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Lire">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation" class="pagination-nav">
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- end section : all-documents -->
    </div>

@endsection
