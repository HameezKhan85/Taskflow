import Topbar from "./Topbar";
import Sidebar from "./Sidebar";
import Customize from "./customize";

export default function Header() {
  return (
    <>
      <Sidebar />
      <Topbar />
      <Customize />
    </>
  );
}
