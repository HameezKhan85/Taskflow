import Link from "next/link";

export default function Sidebar() {
  return (
    <nav className="navbar navbar-vertical navbar-expand-lg">
      <div className="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div className="navbar-vertical-content">
          <ul className="navbar-nav flex-column" id="navbarVerticalNav">
            <li className="nav-item">
              <div className="nav-item-wrapper">
                <Link className="nav-link label-1" href="/">
                  <div
                    className="d-flex align-items-center"
                    role="button"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    aria-controls="dashboard"
                  >
                    <span className="nav-link-icon">
                      <span data-feather="pie-chart"></span>
                    </span>
                    <span className="nav-link-text">Dashboard</span>
                  </div>
                </Link>
                <div className="parent-wrapper label-1">
                  <ul
                    className="nav collapse parent pb-0"
                    data-bs-parent="#navbarVerticalCollapse"
                    id="dashboard"
                  >
                    <li className="collapsed-nav-item-title mb-0 border-bottom-0 d-none">
                      Dashboard
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li className="nav-item">
              <p className="navbar-vertical-label">Pages</p>
              <hr className="navbar-vertical-line" />
              <div className="nav-item-wrapper">
                <Link
                  className="nav-link dropdown-indicator label-1"
                  href="/#pages"
                  role="button"
                  data-bs-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="pages"
                >
                  <div className="d-flex align-items-center">
                    <div className="dropdown-indicator-icon-wrapper">
                      <span className="fas fa-caret-right dropdown-indicator-icon"></span>
                    </div>
                    <span className="nav-link-icon">
                      <span data-feather="layout"></span>
                    </span>
                    <span className="nav-link-text">Projects</span>
                  </div>
                </Link>
                <div className="parent-wrapper label-1">
                  <ul
                    className="nav collapse parent"
                    data-bs-parent="#navbarVerticalCollapse"
                    id="pages"
                  >
                    <li className="collapsed-nav-item-title d-none">Projects</li>
                    <li className="nav-item">
                      <Link
                        className="nav-link"
                        href="/apps/crm/analytics.html"
                      >
                        <div className="d-flex align-items-center">
                          <span className="nav-link-text">Create New</span>
                        </div>
                      </Link>
                    </li>
                    <li className="nav-item">
                      <Link
                        className="nav-link"
                        href="/apps/crm/analytics.html"
                      >
                        <div className="d-flex align-items-center">
                          <span className="nav-link-text">All Projects</span>
                        </div>
                      </Link>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li className="nav-item">
              <p className="navbar-vertical-label">Workspaces</p>
              <hr className="navbar-vertical-line" />
              <div className="nav-item-wrapper">
                <Link
                  className="nav-link label-1"
                  href="/reports"
                  role="button"
                  data-bs-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="reports"
                >
                  <div className="d-flex align-items-center">
                    <span className="nav-link-icon">
                      <span data-feather="file-text"></span>
                    </span>
                    <span className="nav-link-text">Reports</span>
                  </div>
                </Link>
                <div className="parent-wrapper label-1">
                  <ul
                    className="nav collapse parent pb-0"
                    data-bs-parent="#navbarVerticalCollapse"
                    id="reports"
                  >
                    <li className="collapsed-nav-item-title mb-0 border-bottom-0 d-none">
                      Reports
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div className="navbar-vertical-footer">
        <button className="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
          <span className="uil uil-left-arrow-to-left fs-8"></span>
          <span className="uil uil-arrow-from-right fs-8"></span>
          <span className="navbar-vertical-footer-text ms-2">
            Collapsed View
          </span>
        </button>
      </div>
    </nav>
  );
}
