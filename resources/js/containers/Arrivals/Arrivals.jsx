import { Slider } from "../../containers/Slider/Slider.jsx";
import { ItemCard } from "../../containers/ItemCard/ItemCard.jsx";
import bloom_left from "../../assets/images/bloom_left.png";
import bloom_right from "../../assets/images/bloom_right.png";
import styles from "./Arrivals.module.scss"

export const Arrivals = () => {
    
    return (
        <section className={styles.arrivals}>
            <div className={`heavier upper header ${styles.header}`}>
                <img src = {bloom_left} alt = ""/>
                New Arrivals
                <img src = {bloom_right} alt = ""/>
                <div className="link subheader">See All</div>
            </div>
            <Slider size={4}>
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
            </Slider>
        </section>
    )
  }