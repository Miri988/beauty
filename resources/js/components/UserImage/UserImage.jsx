import styles from "./UserImage.module.scss"

export const UserImage = (props) => {
    const {img, name} = props;
  return (
    <div className={styles.image}>
        {img && <img src={`/images/user/${img}`} alt="userimage"/>}
        {!img && <span> {name[0].toUpperCase()} </span>}
    </div>
  )
}
