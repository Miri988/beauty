import { Slider } from "../../containers/Slider/Slider.jsx";
import { BlogCard } from "../../containers/BlogCard/BlogCard.jsx";
import bloom_left from "../../assets/images/bloom_left.png";
import bloom_right from "../../assets/images/bloom_right.png";
import styles from "./Blog.module.scss";

export const Blog = () => {
    
    return (
        <section className={styles.blog}>
            <div className={`heavier upper header ${styles.header}`}>
                <img src = {bloom_left} alt = ""/>
                On the Blog
                <img src = {bloom_right} alt = ""/>
                <div className="link subheader">See All</div>
            </div>
            <Slider size={3}>
                <BlogCard />
                <BlogCard />
                <BlogCard />
                <BlogCard />
                <BlogCard />
                <BlogCard />
            </Slider>
        </section>
    )
  }