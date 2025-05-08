import Image from 'next/image'
import Link from 'next/link'

export default function Topbar() {
    return (
        <nav className="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
            <div className="collapse navbar-collapse justify-content-between">
                <div className="navbar-logo">
                    <button className="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span className="navbar-toggle-icon"><span className="toggle-line"></span></span></button>
                    <Link className="navbar-brand me-1 me-sm-3" href="/">
                        <div className="d-flex align-items-center">
                            <div className="d-flex align-items-center"><Image src="/assets/img/icons/logo.png" alt="phoenix" width={27} height={27} />
                                <h5 className="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                            </div>
                        </div>
                    </Link>
                </div>
                <div className="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style={{ width: '25rem' }}>
                    <form className="position-relative" data-bs-toggle="search" data-bs-display="static">
                        <input className="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
                        <span className="fas fa-search search-box-icon"></span>
                    </form>
                    <div className="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button className="btn btn-link p-0" aria-label="Close"></button></div>
                    <div className="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                        <div className="scrollbar-overlay" style={{ maxHeight: "30rem" }}>
                            <div className="list pb-3">
                                <h6 className="dropdown-header text-body-highlight fs-10 py-2">4 <span className="text-body-quaternary">results</span></h6>
                                <hr className="my-0" />
                                <h6 className="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                                <div className="py-2">
                                    <Link className="dropdown-item py-2 d-flex align-items-center" href="/apps/e-commerce/landing/product-details.html">
                                        <div className="file-thumbnail me-2"><Image className="img-fluid" src="/assets/img/products/60x60/3.png" alt="" width={28} height={28} /></div>
                                        <div className="flex-1">
                                            <h6 className="mb-0 text-body-highlight title">Gift Boxes</h6>
                                        </div>
                                    </Link>
                                </div>
                                <hr className="my-0" />
                                <h6 className="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Categories</h6>
                                <div className="py-2">
                                    <Link className="dropdown-item" href="/apps/e-commerce/landing/product-details.html">
                                        <div className="d-flex align-items-center">
                                            <div className="fw-normal text-body-highlight title">
                                                Apparel Boxes
                                            </div>
                                        </div>
                                    </Link>
                                    <Link className="dropdown-item" href="/apps/e-commerce/landing/product-details.html">
                                        <div className="d-flex align-items-center">
                                            <div className="fw-normal text-body-highlight title">
                                                Cosmetics Boxes
                                            </div>
                                        </div>
                                    </Link>
                                </div>
                                <hr className="my-0" />
                                <h6 className="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Posts</h6>
                                <div className="py-2">
                                    <Link className="dropdown-item" href="/apps/e-commerce/landing/product-details.html">
                                        <div className="d-flex align-items-center">
                                            <div className="fw-normal text-body-highlight title">
                                                Product Packaging: A Balance of Visual and Structural Design
                                            </div>
                                        </div>
                                    </Link>
                                </div>
                            </div>
                            <div className="text-center">
                                <p className="fallback fw-bold fs-7 d-none">No Result Found.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul className="navbar-nav navbar-nav-icons flex-row">
                    <li className="nav-item">
                        <div className="theme-control-toggle fa-icon-wait px-2"><input className="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label className="mb-0 theme-control-toggle-label theme-control-toggle-light" htmlFor="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style={{ height: "32px", width: "32px" }} ><span className="icon" data-feather="moon"></span></label><label className="mb-0 theme-control-toggle-label theme-control-toggle-dark" htmlFor="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style={{ height: "32px", width: "32px" }} ><span className="icon" data-feather="sun"></span></label></div>
                    </li>
                    <li className="nav-item d-lg-none"><Link className="nav-link" href="/#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style={{ height: "19px", width: "19px", marginBottom: "2px" }}></span></Link></li>
                    <li className="nav-item dropdown">
                        <Link className="nav-link" href="/#" style={{ minWidth: "2.25rem" }} role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span className="d-block" style={{ height: "20px", width: "20px" }}><span data-feather="bell" style={{ height: "20px", width: "20px" }}></span></span></Link>
                        <div className="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                            <div className="card position-relative border-0">
                                <div className="card-header p-2">
                                    <div className="d-flex justify-content-between">
                                        <h5 className="text-body-emphasis mb-0">Notifications</h5><button className="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                                    </div>
                                </div>
                                <div className="card-body p-0">
                                    <div className="scrollbar-overlay" style={{ height: "27rem" }}>
                                        <div className="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                            <div className="d-flex align-items-center justify-content-between position-relative">
                                                <div className="d-flex">
                                                    <div className="avatar avatar-m status-online me-3"><Image className="rounded-circle" src="/assets/img/team/40x40/30.webp" alt="" width={40} height={40} /></div>
                                                    <div className="flex-1 me-sm-3">
                                                        <h4 className="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                        <p className="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span className='me-1 fs-10'>💬</span>Mentioned you in a comment.<span className="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                                                        <p className="text-body-secondary fs-9 mb-0"><span className="me-1 fas fa-clock"></span><span className="fw-bold">10:41 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div className="dropdown notification-dropdown"><button className="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span className="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div className="dropdown-menu py-2"><Link className="dropdown-item" href="/#!">Mark as unread</Link></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div className="d-flex align-items-center justify-content-between position-relative">
                                                <div className="d-flex">
                                                    <div className="avatar avatar-m status-online me-3">
                                                        <div className="avatar-name rounded-circle"><span>J</span></div>
                                                    </div>
                                                    <div className="flex-1 me-sm-3">
                                                        <h4 className="fs-9 text-body-emphasis">Jane Foster</h4>
                                                        <p className="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span className='me-1 fs-10'>📅</span>Created an event.<span className="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                                                        <p className="text-body-secondary fs-9 mb-0"><span className="me-1 fas fa-clock"></span><span className="fw-bold">10:20 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div className="dropdown notification-dropdown"><button className="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span className="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div className="dropdown-menu py-2"><Link className="dropdown-item" href="/#!">Mark as unread</Link></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="card-footer p-0 border-top border-translucent border-0">
                                    <div className="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><Link className="fw-bolder" href="/pages/notifications.html">Notification history</Link></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li className="nav-item dropdown"><Link className="nav-link lh-1 pe-0" id="navbarDropdownUser" href="/#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <div className="avatar avatar-l ">
                            <Image className="rounded-circle " src="/assets/img/team/40x40/57.webp" alt="" width={40} height={40} />
                        </div>
                    </Link>
                        <div className="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                            <div className="card position-relative border-0">
                                <div className="card-body p-0">
                                    <div className="text-center pt-4 pb-3">
                                        <div className="avatar avatar-xl ">
                                            <Image className="rounded-circle " src="/assets/img/team/72x72/57.webp" alt="" width={72} height={72} />
                                        </div>
                                        <h6 className="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                    </div>
                                </div>
                                <div className="border-top border-translucent">
                                    <ul className="nav d-flex flex-column my-2 py-1">
                                        <li className="nav-item"><Link className="nav-link px-3 d-block" href="/#!"> <span className="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></Link></li>
                                        <li className="nav-item"><Link className="nav-link px-3 d-block" href="/#!"><span className="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</Link></li>
                                        <li className="nav-item"><Link className="nav-link px-3 d-block" href="/#!"> <span className="me-2 text-body align-bottom" data-feather="lock"></span>Activity</Link></li>
                                        <li className="nav-item"><Link className="nav-link px-3 d-block" href="/#!"> <span className="me-2 text-body align-bottom" data-feather="settings"></span>Settings</Link></li>
                                    </ul>
                                </div>
                                <div className="card-footer border-top border-translucent p-0 pt-2 mb-3">
                                    <div className="px-3 mt-1"> <Link className="btn btn-phoenix-secondary d-flex flex-center w-100" href="/#!"> <span className="me-2" data-feather="log-out"> </span>Sign out</Link></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    );
}