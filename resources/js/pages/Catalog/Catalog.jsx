import { Filter } from "../../components/Filter/Filter.jsx";
import { mainFilter } from "../../class/ShopFilter.js";
import styles from "./Catalog.module.scss";
import { ItemCard } from "../../containers/ItemCard/ItemCard.jsx";
import { Pagination } from "../../components/Pagination/Pagination.jsx";

export const Catalog = () => {
  
  return (
    <div className = {styles.main}>
      <div className = {styles.grid}>
        <div className="column">
          <div className="secondary segment">
            <div className="larger upper header">Filters</div>
            <Filter data={ mainFilter } />
          </div>
        </div>
        <div className="column">
          <div className={styles.cards}>
            {Array(15).fill().map((v, i) => <ItemCard key = {i} id = {i} />)}
          </div>
          <div className="center aligned">
            <Pagination/>
          </div>
        </div>
      </div>
    </div>
  )
}
