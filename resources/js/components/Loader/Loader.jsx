import styles from './Loader.module.scss'

export const Loader = () => {
  return (
    <div className={styles.loader}>
        <div className={styles.heart}><div className={styles.inner}></div></div>
    </div>
  )
}
