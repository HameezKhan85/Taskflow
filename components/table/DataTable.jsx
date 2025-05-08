import Image from "next/image";
import Link from "next/link";
import ViewHeader from "../ViewHeader";

export default function DataTable() {
  return (
    <>
      <div className="content pb-0">
        <div className="mb-9">
          <div
            id="products"
            data-list='{"valueNames":["id","product","slug","category","status","time"],"page":10,"pagination":true}'
          >
            <div className="mb-4">
              <div className="d-flex flex-wrap gap-3">
                <div className="search-box">
                  <form className="position-relative">
                    <input
                      className="form-control search-input search"
                      type="search"
                      placeholder="Search products"
                      aria-label="Search"
                    />
                    <span className="fas fa-search search-box-icon"></span>
                  </form>
                </div>
                <div className="scrollbar overflow-hidden-y">
                  <div className="btn-group position-static" role="group">
                    <div className="btn-group position-static text-nowrap">
                      <button
                        className="btn btn-phoenix-secondary px-7 flex-shrink-0"
                        type="button"
                        data-bs-toggle="dropdown"
                        data-boundary="window"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-bs-reference="parent"
                      >
                        {" "}
                        Category<span className="fas fa-angle-down ms-2"></span>
                      </button>
                      <ul className="dropdown-menu">
                        <li>
                          <Link className="dropdown-item" href="/">
                            Apparel Boxes
                          </Link>
                        </li>
                        <li>
                          <Link className="dropdown-item" href="/">
                            Cosmetic Boxes
                          </Link>
                        </li>
                        <li>
                          <Link className="dropdown-item" href="/">
                            Bakery Boxes
                          </Link>
                        </li>
                        <li>
                          <Link className="dropdown-item" href="/">
                            Medicine Boxes
                          </Link>
                        </li>
                        <li>
                          <Link className="dropdown-item" href="/">
                            Retail Boxes
                          </Link>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <button className="btn btn-primary ms-xxl-auto" id="addBtn">
                  <span className="fas fa-plus me-2"></span>Add product
                </button>
              </div>
            </div>
            <div className="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
              <div className="table-responsive scrollbar mx-n1 px-1">
                <table className="table fs-9 mb-0">
                  <thead>
                    <tr>
                      <th
                        className="white-space-nowrap fs-9 align-middle ps-0"
                        style={{ maxWidth: "20px", width: "18px" }}
                      >
                        <div className="form-check mb-0 fs-8">
                          <input
                            className="form-check-input"
                            id="checkbox-bulk-products-select"
                            type="checkbox"
                            data-bulk-select='{"body":"products-table-body"}'
                          />
                        </div>
                      </th>
                      <th
                        className="sort white-space-nowrap align-middle ps-4"
                        scope="col"
                        style={{ width: "70px" }}
                        data-sort="id"
                      >
                        ID
                      </th>
                      <th className="sort white-space-nowrap align-middle fs-10" scope="col" style={{width: "70px"}}></th>
                      <th
                        className="sort white-space-nowrap align-middle ps-4"
                        scope="col"
                        style={{ width: "780px" }}
                        data-sort="product"
                      >
                        PRODUCT NAME
                      </th>
                      <th
                        className="sort align-middle text-end ps-4"
                        scope="col"
                        data-sort="slug"
                        style={{ width: "150px" }}
                      >
                        SLUG
                      </th>
                      <th
                        className="sort align-middle ps-4"
                        scope="col"
                        data-sort="category"
                        style={{ width: "150px" }}
                      >
                        CATEGORY
                      </th>
                      <th
                        className="sort align-middle"
                        scope="col"
                        data-sort="status"
                        style={{ width: "100px" }}
                      >
                        STATUS
                      </th>
                      <th
                        className="sort align-middle"
                        scope="col"
                        data-sort="time"
                        style={{ width: "150px" }}
                      >
                        PUBLISHED ON
                      </th>
                      <th
                        className="sort text-end align-middle pe-0 ps-4"
                        scope="col"
                        style={{ width: "70px" }}
                      ></th>
                    </tr>
                  </thead>
                  <tbody className="list" id="products-table-body">
                    <tr className="position-static">
                      <td className="fs-9 align-middle">
                        <div className="form-check mb-0 fs-8">
                          <input
                            className="form-check-input"
                            type="checkbox"
                            data-bulk-select-row='{"product":"Gift Boxes","productImage":"/products/1.png","slug":"gift-boxes","category":"Retail Boxes","status":"published","publishedOn":"Nov 12, 10:45 PM"}'
                          />
                        </div>
                      </td>
                      <td className="id align-middle white-space-nowrap fw-bold text-body-tertiary ps-4">01</td>
                      <td className="align-middle white-space-nowrap py-0">
                        <Link
                          className="d-block border border-translucent rounded-2"
                          href="/../landing/product-details.html"
                        >
                          <Image
                            src="/assets/img/products/1.png"
                            alt=""
                            width={53}
                            height={53}
                          />
                        </Link>
                      </td>
                      <td className="product align-middle ps-4">
                        <Link
                          className="fw-semibold line-clamp-3 mb-0"
                          href="/../landing/product-details.html"
                        >
                          Gift Boxes
                        </Link>
                      </td>
                      <td className="slug align-middle white-space-nowrap text-end text-body-tertiary ps-4">
                        gift-boxes
                      </td>
                      <td className="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                        Retail Boxes
                      </td>
                      <td
                        className="status align-middle white-space-nowrap text-body-quaternary fs-9 fw-semibold"
                        style={{ minWidth: "100px" }}
                      >
                        Published
                      </td>
                      <td className="time align-middle white-space-nowrap text-body-tertiary text-opacity-85">
                        Nov 12, 10:45 PM
                      </td>
                      <td className="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                        <div className="btn-reveal-trigger position-static">
                          <button
                            className="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                            type="button"
                            data-bs-toggle="dropdown"
                            data-boundary="window"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-bs-reference="parent"
                          >
                            <span className="fas fa-ellipsis-h fs-10"></span>
                          </button>
                          <div className="dropdown-menu dropdown-menu-end py-2">
                            <Link className="dropdown-item" href="/">
                              View
                            </Link>
                            <Link className="dropdown-item" href="/">
                              Edit
                            </Link>
                            <div className="dropdown-divider"></div>
                            <Link className="dropdown-item text-danger" href="/">
                              Delete
                            </Link>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div className="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div className="col-auto d-flex">
                  <p
                    className="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                    data-list-info="data-list-info"
                  ></p>
                  <Link className="fw-semibold" href="/" data-list-view="*">
                    View all
                    <span
                      className="fas fa-angle-right ms-1"
                      data-fa-transform="down-1"
                    ></span>
                  </Link>
                  <Link
                    className="fw-semibold d-none"
                    href="/"
                    data-list-view="less"
                  >
                    View Less
                    <span
                      className="fas fa-angle-right ms-1"
                      data-fa-transform="down-1"
                    ></span>
                  </Link>
                </div>
                <div className="col-auto d-flex">
                  <button className="page-link" data-list-pagination="prev">
                    <span className="fas fa-chevron-left"></span>
                  </button>
                  <ul className="mb-0 pagination"></ul>
                  <button
                    className="page-link pe-0"
                    data-list-pagination="next"
                  >
                    <span className="fas fa-chevron-right"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
