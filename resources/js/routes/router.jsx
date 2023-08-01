import { createBrowserRouter } from "react-router-dom";

import { Main } from "../pages/Main/Main.jsx";
import { Catalog } from "../pages/Catalog/Catalog.jsx";
import { ProductCard } from "../pages/ProductCard/ProductCard.jsx";
import { Blog } from "../pages/Blog/Blog.jsx";
import { BlogPost } from "../pages/BlogPost/BlogPost.jsx";
import { AboutUs } from "../pages/AboutUs/AboutUs.jsx";
import { Bestsellers } from "../pages/Bestsellers/Bestsellers.jsx";
import { Collection } from "../pages/Collection/Collection.jsx";
import { Account } from "../pages/Account/Account.jsx";
import { Search } from "../pages/Search/Search.jsx";
import { Cart } from "../pages/Cart/Cart.jsx";
import { Admin } from "../pages/Admin/Admin.jsx";

import { Header } from "../containers/Header/Header.jsx";
import { Footer } from "../containers/Footer/Footer.jsx";

import pagesRoutes from "./pagesRoutes.js";


export const router = createBrowserRouter([
    {
      path: pagesRoutes.MAIN,
      element: (
               <>
                  <Header/>
                  <Main/>
                  <Footer/>
              </>
      ),
    },
    {
      path: pagesRoutes.CATALOG,
      element: (
               <>
                  <Header/>
                  <Catalog/>
                  <Footer/>
              </>
      ),
    },
    {
      path: pagesRoutes.PRODUCTCARD,
      element: (
               <>
                  <Header/>
                  <ProductCard/>
                  <Footer/>
              </>
      ),
    },
    {
      path: pagesRoutes.BLOG,
      element: (
               <>
                  <Header/>
                  <Blog/>
                  <Footer/>
               </>
      ),
    },
    {
      path: pagesRoutes.BLOGPOST,
      element: (
               <>
                  <Header/>
                  <BlogPost/>
                  <Footer/>
               </>
      ),
    },
    {
      path: pagesRoutes.ABOUTUS,
      element: (
               <>
                  <Header/>
                  <AboutUs/>
                  <Footer/>
               </>
      ),
    },
    {
        path: pagesRoutes.BESTSELLERS,
        element: (
                 <>
                    <Header/>
                    <Bestsellers/>
                    <Footer/>
                 </>
        ),
      },
      {
        path: pagesRoutes.COLLECTION,
        element: (
                 <>
                    <Header/>
                    <Collection/>
                    <Footer/>
                 </>
        ),
      },
      {
        path: pagesRoutes.SEARCH,
        element: (
                 <>
                    <Header/>
                    <Search/>
                    <Footer/>
                 </>
        ),
      },
      {
        path: pagesRoutes.ACCOUNT,
        element: (
                 <>
                    <Header/>
                    <Account/>
                    <Footer/>
                 </>
        ),
      },
      {
        path: pagesRoutes.CART,
        element: (
                 <>
                    <Header/>
                    <Cart/>
                    <Footer/>
                 </>
        ),
      }, 
      {
        path: pagesRoutes.ADMIN,
        element: (
                 <>
                    <Header/>
                    <Admin/>
                    <Footer/>
                 </>
        ),
      }, 
  ]);