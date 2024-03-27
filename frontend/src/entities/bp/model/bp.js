const bpToTree = (data) =>{
    return data.reduce((acc, curr, index, orig) => {
        if (curr.parentProcess) {
            let parent = orig.find(item => {
                return item.id === curr.parentProcess;
            });

            (parent.children = parent.children || []).push(curr);
            return acc;
        } else {
            acc.push(curr);
            return acc;
        }
    }, []);
};

export {bpToTree};