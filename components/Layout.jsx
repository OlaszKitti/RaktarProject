const Layout = ({ children }) => {
  return (
    <>

  <div className="navbar">
    <div className="dropdown">
      <button className="dropbtn">Kategória</button>
      <div className="dropdown-content">
        <a href="#">Thriller</a>
        <a href="#">Romantikus</a>
        <a href="#">Fantasy</a>
        <a href="#">Sci-fi</a>
      </div>
    </div>

    <div className="dropdown">
      <button className="dropbtn">Író</button>
      <div className="dropdown-content">
        <a href="#">Holly Jackson</a>
        <a href="#">Sarah J. Maas</a>
        <a href="#">Ali Hazelwood</a>
      </div>
    </div>

    <div className="dropdown">
      <button className="dropbtn">Kiadó </button>
      <div className="dropdown-content">
        <a href="#">HarperCollins</a>
        <a href="#">Penguin Books</a>
        <a href="#">Bloomsbury</a>
      </div>
    </div>
  </div>



      <header>
        <h1>Dragon Könyv raktár</h1>
      </header>

      <main>
        <section id="main" className="products">
          {children}
        </section>
      </main>

      <footer>Könyv raktár</footer>
    </>
  );
};
export default Layout