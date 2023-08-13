import { Filter } from "../../components/Filter/Filter.jsx";
import { mainFilter } from "../../class/ShopFilter.js";
import styles from "./Catalog.module.scss";
import { ItemCard } from "../../containers/ItemCard/ItemCard.jsx";
import { Pagination } from "../../components/Pagination/Pagination.jsx";
import { Loader } from "../../components/Loader/Loader.jsx";
import { useSelector, useDispatch } from "react-redux";
import { useEffect } from "react";
import { useState } from "react";

export const Catalog = () => {

  const dispatch = useDispatch();

  const onFilterClick = async (v) => {
    mainFilter.set()
    await loadPage(mainFilter.lastUrl + '&page=1')
  }

  const onPage = async (v) => {
    if (v === products.page) return
    await loadPage(mainFilter.lastUrl + '&page=' + v)
  }

  const loadPage = async(query = '') => {
    try {
      const result = await fetch('http://127.0.0.1:8000/api/products?' + query);
      dispatch({ type: "setSearchData", payload: await result.json() })
    } catch (e) {
      console.log(e)
    }
  }

  const searchData = useSelector(s => s.searchData)
  const products = useSelector(s => s.searchData.products)

  useEffect(() => {
    const fetchData = async () => {
      await loadPage()
    }
    !searchData.loaded && fetchData()
  }, []);
  
  return (
    <div className = {styles.main}>
      { !searchData.loaded && <Loader /> }
      {
        searchData.loaded && <>
          <div className = {styles.grid}>
            <div className="column">
              <div className="secondary segment">
                <div className="larger upper header">Filters</div>
                <Filter data={ mainFilter } handler={onFilterClick} />
              </div>
            </div>
            <div className="column">
              <div className={styles.cards}>
                {products.list.map(v => <ItemCard key = {v.id} {...v} />)}
              </div>
              <div className="center aligned">
                <Pagination count={products.count} page={products.page} onPage={onPage}/>
              </div>
            </div>
          </div>
        </>
      }
    </div>
  )
}
